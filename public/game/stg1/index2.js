enchant();

// 素材(必要になりそうなやつ)
var KUMA_IMAGE_PATH      = "/public/game/stg1/chara2.gif"; // プレイヤーイメージ
var MAIN_BGM             = "/public/game/stg1/petomato3.wav";  // メインBGM
var TOUCH_SE_PATH        = "/public/game/stg1/se8.wav";    // クマタッチ時SE
var TOUCH_KUMAKO_SE_PATH = "/public/game/stg1/b1Rm4.wav";      // クマ子タッチ時SE
var TOUCH_KUMAYA_SE_PATH = "/public/game/stg1/se9.wav";    // クマ也タッチ時SE

// 定数
var SCREEN_WIDTH          = 320;// 画面幅
var SCREEN_HEIGHT         = 360;// 画面高さ
var FRAME_RATE            = 30; // フレームレート
var GAME_LIMIT_TIME       = limit_time; // ゲームのリミットタイム
var KUMA_SPEED            = 2;  // クマの移動速度
var KUMA_SCORE            = 10; // クマタッチ時のスコア
var KUMAKO_SCORE          =-100;// クマ子タッチ時のスコア
var KUMAYA_SCORE          = 100;// クマ也タッチ時のスコア
var KUMAYA_SPEED          = 8;  // クマ也の移動速度
var KUMICHAEL_SCORE       = 30; // クマイケルタッチ時のスコア
var chara_1 = chara_1;
var chara_2 = chara_2;
var chara_2 = chara_3;
var score_pass = score_pass;
var lang = lang;
var goal = goal;
var congrats = congrats;
var sorry = sorry;
var str_score = str_score;
var post_url = "/"+lang+"/in/game/getscore/"
// グローバル変数
var game       = null;
//   enchant.Sound.enabledInMobileSafari = true;

window.onload = function() {
  game = new Game(SCREEN_WIDTH, SCREEN_HEIGHT);
  game.fps = FRAME_RATE;
  // リソース読み込み
  game.preload(KUMA_IMAGE_PATH, TOUCH_SE_PATH, TOUCH_KUMAKO_SE_PATH, TOUCH_KUMAYA_SE_PATH, MAIN_BGM);
  
  game.onload = function() {
  	var scene = game.rootScene;
  	scene.backgroundColor = "#222";
  	
  	// スコアラベル
  	var scoreLabel = null;
  	var timerLabel = null;
  	
    scene.onenter = function() {
      // フレームとスコアとリセット
      game.frame = 0;
      game.score = 0;
      // スコアラベルを生成, 表示
      scoreLabel = new Label();
      scene.addChild(scoreLabel);
      scoreLabel.moveTo(10, 10);
      scoreLabel.color = "white";
      scoreLabel.font = "11px 'Consolas', 'Monaco', 'ＭＳ ゴシック'";
      scoreLabel.text = "Score : ";
      // タイマーラベルを生成, 表示
      timerLabel = new Label();
      scene.addChild(timerLabel);
      timerLabel.moveTo(200, 10);
      timerLabel.color = "white";
      timerLabel.font = "11px 'Consolas', 'Monaco', 'ＭＳ ゴシック'";
      timerLabel.text = "Timer : ";
  	};
  	
  	// シーン更新イベントリスナを登録
  	scene.onenterframe = function() {
  	  if (game.frame % 15 == 0) {
    		var n = Math.floor(Math.random()*100); // 0~99
    		var kuma = null;
    		// 5% でクマ子 5 
    		if (n < chara_1) {
    		  kuma = new Kumako();
    		  var x = Math.random()*(game.width-kuma.width);
    		  var y = Math.random()*(game.height-kuma.height);
    		  kuma.moveTo(x, y);
    		}
    		// 5% でクマ也 10 -5
    		else if (n < chara_2) {
    		  kuma = new Kumaya();
    		  var x = Math.random()*(game.width-kuma.width);
    		  var y = Math.random()*(game.height-kuma.height);
    		  kuma.moveTo(x, y);
    		}
    		// 20% でクマイケル 30 - 10
    		else if (n < chara_3) {
    		  kuma = new Kumichael();
    		  var tx = Math.random()*(game.width-kuma.width);
    		  var ty = Math.random()*(game.height-kuma.height);
    		  kuma.tx = tx;
    		  kuma.ty = ty;
    		  kuma.update();
    		}
    		// 70% でクマ
    		else {
    		  kuma = new Kuma();
    		  var x = Math.random()*(game.width-kuma.width);
    		  var y = Math.random()*(game.height-kuma.height);
    		  kuma.moveTo(x, y);
    		}
  		  scene.addChild(kuma);
  	  }
  	    
      // スコアを更新
      scoreLabel.text = "Score : " + game.score;
      
      // タイマー更新
      var time = GAME_LIMIT_TIME - Math.floor(game.frame/game.fps);
      timerLabel.text = "Timer : " + time;
      if (time < 10) {
  		  timerLabel.color = "red";
  	  }
  	    
  	  // ゲーム終了
  	  if (time <= 0) {
    		var score = game.score;
    		var message = game.score + " msg1";
//         message += "msg2";
        var param = {
          score_pass  : score_pass,
          score : score
//           q_num  : $(this).parent('div').attr('id')
        };
    		game.end(score, message);
//     		if(score > goal){
//           $.ajax({type:'POST',dataType:'json',url:"/"+lang+"/in/game/getscore/",data:param});
          alert(score);
//           alert(congrats+"\n"+str_score+' : '+score);
//         }else{
//           alert(sorry+"\n"+str_score+' : '+score);
//         }
        window.location.replace('/'+lang+'/rank/score/'+score+'/');
  	  }
  	    
      // BGM 再生
      game.assets[MAIN_BGM].play();
  	    
  	};
  	
  	// タッチした位置を確認するために補助サークルを表示する(ちょっとした思いやりが大切)
  	var circle = new Entity();
  	circle.width = 5;
  	circle.height = 5;
  	circle.backgroundColor = "white";
  	circle._element.style.borderRadius = "50%";
  	circle.visible = false;
  	scene.addChild(circle);
  	scene.addEventListener("touchstart", function(e){
      circle.x = e.x-circle.width/2;
      circle.y = e.y-circle.height/2;
      circle.visible = true;
  	});
	
  };
    
  game.start();
};


// クマクラス
var Kuma = Class.create(Sprite, {
  // 初期化
  initialize: function() {
  	Sprite.call(this, 32, 32);
  	
  	this.image = game.assets[KUMA_IMAGE_PATH];
  	// 移動値をセット
  	this.vx = Math.floor( Math.random()*2 ) ? -1 : 1;
  	this.vy = Math.floor( Math.random()*2 ) ? -1 : 1;
  	this.speed = KUMA_SPEED;
  	this.scaleX = this.vx;
  	
  	// アニメーション用パラメータ
  	this.frameIndex = 0;
  	this.frameList = [5, 6, 7];
  	
  	// タッチした時用パラメータ
  	this.touchScore = KUMA_SCORE;
  	this.touchSE    = game.assets[TOUCH_SE_PATH];
  	
  	// 時間
  	this.time = 0;
  	this.limitTime = 150;
  },
    
  // クマ系クラス共通処理
  onenterframe: function() {
  	// 更新処理
  	this.update();
  	
  	// フレームアニメーション
  	this.anim();
  	
  	
  	// リミット時間を超えたら消す
  	if (this.time > this.limitTime) {
  	  this.parentNode.removeChild(this);
  	}
  	
  	// タイム加算
  	++this.time;
  },
    
  // クマ系クラス共通処理
  ontouchstart: function() {
  	this.parentNode.removeChild(this);
  	
  	var scoreLabel = new ScoreLabel( this.touchScore );
  	scoreLabel.moveTo(this.x, this.y);
  	game.rootScene.addChild(scoreLabel);
  	
  	// スコア加算
  	game.score += this.touchScore;
  	// タッチ時のSEを再生
  	this.touchSE.clone().play();
  },
    
  // 更新
  update: function() {
  	// TODO: 動きを変更したいときはここに書く(継承先も同様)
  	// 移動
  	this.x += this.vx * this.speed;
  	this.y += this.vy * this.speed;
  	
  	// 画面外に出ないよう制御する
  	this.control();
  },
    
  // アニメーション
  anim: function() {
  	if (game.frame % 4 == 0) {
  	  this.frameIndex += 1;
  	  this.frameIndex %= this.frameList.length;
  	  this.frame = this.frameList[this.frameIndex];
  	}
  },
    
  // 画面からはみ出ないよう制御
  control: function() {
  	var left   = 0;
  	var right  = game.width-this.width;
  	var top    = 0;
  	var bottom = game.height-this.height;
	
  	if (this.x < left) {
  	    this.x = left; this.vx *= -1; this.scaleX *= -1;
  	}
  	if (this.x > right) {
  	    this.x = right; this.vx *= -1; this.scaleX *= -1;
  	}
  	if (this.y < top) {
  	    this.y = left; this.vy *= -1;
  	}
  	if (this.y > bottom) {
  	    this.y = right; this.vy *= -1;
  	}
  },
});


// クマ子(クマ界のマドンナ)
var Kumako = Class.create(Kuma, {
  // 初期化
  initialize: function() {
  	// 親の初期化処理
  	Kuma.call(this);
  	// フレーム
  	this.frameList = [10, 11, 12];
  	// タッチした時用パラメータ
  	this.touchScore = KUMAKO_SCORE;
  	this.touchSE    = game.assets[TOUCH_KUMAKO_SE_PATH];
  },
    
});



// クマ也(スケボーに乗ったイケメン)
var Kumaya = Class.create(Kuma, {
  // 初期化
  initialize: function() {
  	// 親の初期化処理
  	Kuma.call(this);
  	// スピードを設定
  	this.speed = KUMAYA_SPEED;
  	// フレーム
  	this.frameList = [4];
  	// タッチした時用パラメータ
  	this.touchScore = KUMAYA_SCORE;
  	this.touchSE    = game.assets[TOUCH_KUMAYA_SE_PATH];
  },
    
});


// クマイケル(アメリカ育ち)
var Kumichael = Class.create(Kuma, {
  // 初期化
  initialize: function() {
  	// 親の初期化処理
  	Kuma.call(this);
  	// フレーム
  	this.frame = 5;
  	this.frameList = [0,1,2];
  	// タッチした時用パラメータ
  	this.touchScore = KUMICHAEL_SCORE;
  	// 基準位置
  	this.tx = 0;
  	this.ty = 0;
  	this.radius = Math.random()*40+40;
  },
    
  update: function() {
  	// 基準位置の周りをクルクル回る
  	var rad = this.time*4*Math.PI/180;
  	this.x = this.tx + Math.cos(rad)*this.radius;
  	this.y = this.ty + Math.sin(rad)*this.radius;
  },
    
});

// スコアラベル
var ScoreLabel = Class.create(Label, {
  // 初期化
  initialize: function(score) {
  	Label.call(this);
  	// スコア
  	this.score = score;
  	// 正
  	if (score > 0) {
  	  this.text = '+' + this.score;
  	  this.color = "white";
  	}
  	// 負
  	else {
	    this.text = this.score;
	    this.color = "red";
  	}
  	// フォント
  	this.font = "11px 'Consolas', 'Monaco', 'ＭＳ ゴシック'";
  	// タイム
  	this.time = 0;
  },
    
  onenterframe: function() {
  	// 位置, 透明度調整
  	this.y -= 0.1;
  	this.opacity = 1.0 - (this.time/30);
  	// 30フレーム経ったら消す
  	if (this.time > 30) {
  	  this.parentNode.removeChild(this);
  	}
  	
  	++this.time;
  },
});




