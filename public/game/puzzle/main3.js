//ゲーム
enchant();
var game;
var panel=undefined, width=undefined, height=undefined;
var panelWidth=64, panelHeight=64;
var bingoPanelXY = undefined;
var clearPanelCount=0, maxComboCount=0, comboCount=0, restMoveCount=500, MoveCount=5;
var frameStatus = 0;
var fallSpeed = 16;
var panelKindStart = 0;
var panelKindCount = 6;
var isAllPanelTouchEnabled = true;
var outMargin = 4;
// var framelist = [1,2,3,0,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,2,3,0,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,2,3,0,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0];
var panel_png = panel_png;
var bingo_wav = '/public/game/puzzle/bingo.wav';
var combo_wav = '/public/game/puzzle/combo.wav';
var damage_wav = '/public/game/puzzle/b1Rm4.wav';
var bomb   = '/public/stg1/crash1.png';
var framequeue = framequeue;
var enemy_lv = enemy_lv;
var my_lv = my_lv;
var turn = 0;
var z = 0;
var lang = lang;
var enemy_img = enemy_img;
var start_enemy_hp = $('#enemy_hp').text();
var enemy_hp = $('#enemy_hp').text();
var my_hp = $('#my_hp').text();
var post_ball = Array();
var use_magic = Array();
var gage = 300;
var my_damage = gage/max_mpk;
var mt_monster_hp = mt_monster_hp;

var Panel = enchant.Class.create(enchant.Sprite, {
	initialize: function(w, h) {
		enchant.Sprite.call(this, panelWidth, panelHeight);
		this.image = game.assets[panel_png];

// 		this.frame = panelKindStart+Math.floor(Math.random()*panelKindCount);

		this.frame = framequeue[z]; z++;
		this.x = panelWidth*w;
		this.y = panelHeight*h;
		this.id = w+(width*h);
		this.addEventListener(Event.ENTER_FRAME, function() {
		//	console.log(' this.x='+this.x+' this.y='+this.y);
			if(this.opacity==0.5) {
				this.visible = (game.frame%3)?true:false;
			} else {
				this.visible = true;
			}
			if(this.opacity==0.9) {
			//	console.log(' this.id='+this.id+' this.x='+this.x+' this.y='+this.y);
				if(frameStatus>=0) {
				//	console.log('this.id='+this.id);
					var myY = panelHeight*(Math.floor(this.id/width));
					if(myY>=this.y+fallSpeed) {
						this.y += fallSpeed;
					} else {
					//	console.log('intersect this.id='+this.id+' this.y='+this.y+' myY='+myY);
						this.opacity = 1.0;
					}
					if(frameStatus==0) {
						this.opacity = 1.0;
					}
				}
			}
		});
		game.rootScene.addChild(this);
	}
});

  // 爆発クラス
var Crash = Class.create(Sprite, {
    // 初期化処理
    initialize: function() {
        Sprite.call(this, 32, 32);
        this.image = game.assets[bomb];
        this.frame = 0;
        this.scale(2);
        this.x;
        this.y;
    },
    // 更新処理
    onenterframe: function() {
        this.frame += 1;
        
        // 削除処理
        if (this.frame > 8) {
            this.parentNode.removeChild(this);
        }
    },
});
  
window.onload = function() {
	var scoreLabelHeight = 0;
	var gameWidth = panelWidth*5;
	var gameHeight = (panelHeight*6);
	game = new Game(gameWidth, gameHeight);
	width = Math.floor(gameWidth/panelWidth);
	height = Math.floor((gameHeight-scoreLabelHeight)/panelHeight);
	game.fps = 15;
	game.score = 0;
	game.preload(panel_png,bingo_wav,combo_wav,bomb,damage_wav);
	game.onload = function() {
		var startX=-1, startY=-1, endX=-1, endY=-1;
		var thisFrame = undefined;
		var movePanel = undefined;
		var seBingo = game.assets[bingo_wav].clone();
		var seCombo = game.assets[combo_wav].clone();
    var seDamage = game.assets[damage_wav].clone();
		panel = new Array(width);
		for(var w=0; w<width; w++) panel[w] = new Array(height);
		for(var w=0; w<width; w++) {
      for(var h=0; h<height; h++) {
        
				panel[w][h] = new Panel(w,h);
			}
		}
		var maxComboText = 'MAX COMBO: ';
		var maxComboLabel = new MutableText(5, gameHeight-scoreLabelHeight*3, gameWidth, maxComboText+'0');
		var clearPanelText = 'CLEAR PANEL: ';
		var clearPanelLabel = new MutableText(5, gameHeight-scoreLabelHeight*2, gameWidth, clearPanelText+'0');
		var restMoveText = 'REST MOVE: ';
		var restMoveLabel = new MutableText(5, gameHeight-scoreLabelHeight*1, gameWidth, restMoveText+restMoveCount);
		var comboLabel = new MutableText(0, 0, gameWidth, '');
		comboLabel.opacity = 0.0;
		while(checkBingo()!=0) {
			var count = clearBingo();
		}
		game.rootScene.addEventListener(Event.TOUCH_START, function(e) {
      if(turn==0) thisComboCount = 0
			if(e.x<=0 || gameWidth<=e.x || e.y<=0 || (gameHeight-scoreLabelHeight)<=e.y) return;
			if(isAllPanelTouchEnabled==false) return;

			startX = endX = parseInt(e.x/panelWidth);
			startY = endY = parseInt(e.y/panelHeight);
			panel[startX][startY].opacity = 0.0;
			movePanel = new Sprite(panelWidth, panelHeight);
			movePanel.image = panel[startX][startY].image;
			movePanel.frame = panel[startX][startY].frame;
			movePanel.x = e.x-panelWidth/2;
			movePanel.y = e.y-panelHeight/2;
			game.rootScene.addChild(movePanel);
			allPanelTouchEnabled(false);
		});
		game.rootScene.addEventListener(Event.TOUCH_MOVE, function(e) {
			if(startX==-1 || startY==-1) return;
			if(movePanel==undefined) return;
			if(e.x<=0+outMargin || gameWidth-outMargin<=e.x || e.y<=0+outMargin || (gameHeight-scoreLabelHeight*3)-outMargin<=e.y) {
				var trimX = e.x;
				if(e.x<=0) trimX = 0;
				else if(gameWidth<=e.x) trimX = gameWidth-1;
				var trimY = e.y;
				if(e.y<=0) trimY = 0;
				else if((gameHeight-scoreLabelHeight*3)<=e.y) trimY = (gameHeight-scoreLabelHeight*3)-1;
				startX = parseInt(trimX/panelWidth);
				startY = parseInt(trimY/panelHeight);
				endX = parseInt(trimX/panelWidth);
				endY = parseInt(trimY/panelHeight);
				var startFrame = panel[startX][startY].frame;
				var endFrame = panel[endX][endY].frame;
				panel[startX][startY].frame = endFrame;
				panel[startX][startY].opacity = 1.0;
				panel[endX][endY].frame = startFrame;
				panel[endX][endY].opacity = 1.0;
				game.rootScene.removeChild(movePanel);
				movePanel = undefined;
				comboCount = 0;
				startX = -1;
				startY = -1;
				return;
			}
			movePanel.x = e.x-panelWidth/2;
			movePanel.y = e.y-panelHeight/2;
			endX = parseInt(e.x/panelWidth);
			endY = parseInt(e.y/panelHeight);
			var startFrame = panel[startX][startY].frame;
			var endFrame = panel[endX][endY].frame;
			panel[startX][startY].frame = endFrame;
			panel[startX][startY].opacity = 1.0;
			panel[endX][endY].frame = startFrame;
			panel[endX][endY].opacity = 0.0;
			if(endX<startX-1 || startX+1<endX || endY<startY-1 || startY+1<endY) {
				var startFrame = panel[startX][startY].frame;
				var endFrame = panel[endX][endY].frame;
				panel[startX][startY].frame = endFrame;
				panel[startX][startY].opacity = 1.0;
				panel[endX][endY].frame = startFrame;
				panel[endX][endY].opacity = 1.0;
				game.rootScene.removeChild(movePanel);
				movePanel = undefined;
				comboCount = 0;
				startX = -1;
				startY = -1;
				return;
			}
			if(startX!=endX || startY!=endY) {
				restMoveCount--;
        MoveCount--;
        console.log(MoveCount);
				restMoveLabel.text = restMoveText+restMoveCount;
        post_ball[turn] = Array(startX,startY,endX,endY);
			}
			startX = parseInt(e.x/panelWidth);
			startY = parseInt(e.y/panelHeight);
			if(MoveCount<=0) {
				endX = parseInt(e.x/panelWidth);
				endY = parseInt(e.y/panelHeight);
				var startFrame = panel[startX][startY].frame;
				var endFrame = panel[endX][endY].frame;
				panel[startX][startY].frame = endFrame;
				panel[startX][startY].opacity = 1.0;
				panel[endX][endY].frame = startFrame;
				panel[endX][endY].opacity = 1.0;
				game.rootScene.removeChild(movePanel);
				movePanel = undefined;
				comboCount = 0;
				startX = -1;
				startY = -1;
			}
      
		});
		game.rootScene.addEventListener(Event.TOUCH_END, function(e) {
			if(startX==-1 || startY==-1) return;
			if(movePanel==undefined) return;
			if(e.x<=0+outMargin || gameWidth-outMargin<=e.x || e.y<=0+outMargin || (gameHeight-scoreLabelHeight*3)-outMargin<=e.y) {
				var trimX = e.x;
				if(e.x<=0) trimX = 0;
				else if(gameWidth<=e.x) trimX = gameWidth-1;
				var trimY = e.y;
				if(e.y<=0) trimY = 0;
				else if((gameHeight-scoreLabelHeight*3)<=e.y) trimY = (gameHeight-scoreLabelHeight*3)-1;
				startX = parseInt(trimX/panelWidth);
				startY = parseInt(trimY/panelHeight);
				endX = parseInt(trimX/panelWidth);
				endY = parseInt(trimY/panelHeight);
				var startFrame = panel[startX][startY].frame;
				var endFrame = panel[endX][endY].frame;
				panel[startX][startY].frame = endFrame;
				panel[startX][startY].opacity = 1.0;
				panel[endX][endY].frame = startFrame;
				panel[endX][endY].opacity = 1.0;
				game.rootScene.removeChild(movePanel);
				movePanel = undefined;
				comboCount = 0;
				startX = -1;
				startY = -1;
				return;
			}
			endX = parseInt(e.x/panelWidth);
			endY = parseInt(e.y/panelHeight);
			if(endX<startX-1 || startX+1<endX || endY<startY-1 || startY+1<endY) {
				var startFrame = panel[startX][startY].frame;
				var endFrame = panel[endX][endY].frame;
				panel[startX][startY].frame = startFrame;
				panel[startX][startY].opacity = 1.0;
				panel[endX][endY].frame = endFrame;
				panel[endX][endY].opacity = 1.0;
				game.rootScene.removeChild(movePanel);
				movePanel = undefined;
				comboCount = 0;
				startX = -1;
				startY = -1;
				return;
			}
			var startFrame = panel[startX][startY].frame;
			var endFrame = panel[endX][endY].frame;
			panel[startX][startY].frame = endFrame;
			panel[startX][startY].opacity = 1.0;
			panel[endX][endY].frame = startFrame;
			panel[endX][endY].opacity = 1.0;
			game.rootScene.removeChild(movePanel);
			movePanel = undefined;
			comboCount = 0;
			startX = -1;
			startY = -1;
		});
		game.rootScene.addEventListener(Event.ENTER_FRAME, function(e) {
			if(movePanel!=undefined) return;
			allPanelFlush();
			if(frameStatus==0) {
				var thisComboCount = checkBingo();
				if(thisComboCount>0) {
//           attack(thisComboCount);
					var count = getBingoXY();
					if(thisFrame==undefined || thisFrame==0) {
						thisFrame = game.frame;
						seBingo.stop();
			            seBingo.play();
					}
					if((game.frame-thisFrame)/game.fps>=1) {
						var sceneCount = 0;
						for(var i=0; i<width; i++) {
							for(var j=0; j<height; j++) {
								if(panel[i][j].opacity==0.5) {
									sceneCount++;
									panel[i][j].frame = -1;
									panel[i][j].opacity = 1.0;
									if(sceneCount==count) {
										clearPanelCount += count;
										clearPanelLabel.text = clearPanelText+clearPanelCount;
										comboCount += thisComboCount;
										if(maxComboCount<comboCount) {
											seCombo.stop();
											seCombo.play();
											maxComboCount = comboCount;
											maxComboLabel.text = maxComboText+maxComboCount;
											comboLabel.x = (panel[i][j].x+16<gameWidth-128)?(panel[i][j].x+16):(gameWidth-128);
											comboLabel.y = (panel[i][j].y+16<gameHeight-32)?(panel[i][j].y+16):(gameHeight-32);
											comboLabel.scaleX = 1.0;
											comboLabel.scaleY = 1.0;
											comboLabel.opacity = 1.0;
											comboLabel.text = maxComboCount+'combo!';
											comboLabel.tl.fadeTo(0,30).and().scaleTo(1.2,3,30);
										}
										trimPanel();
										thisFrame = undefined;
										break;
									}
								}
							}
							if(sceneCount==count) break;
						}
					}
				} else {
					comboCount = 0;
					if(isAllPanelTouchEnabled==false){
            allPanelTouchEnabled(true);
            turn++; my_hp--; use_magic = 0;
            if($('#my_hp').text()!=my_hp){
              seDamage.play();
              $('#my_hp').css("width", my_hp * my_damage);
              $('#my_hp').text(my_hp);
              $('#enchant-stage').css("background-image", "url(nothing)");
              $('#enchant-stage').css("background-color", "red");
            }
          }
          else{
            $('#enchant-stage').css("background-image", "url("+enemy_img+")");
//             seDamage.stop();
            MoveCount = 5;
          }

					var damage = start_enemy_hp - enemy_hp;
          if(enemy_hp < 1){
            $('#enchant-stage').css("background-image", "url("+enemy_img+")");
//             var post_q_txt = '/en/in/puzzle/';
//             var param2 = {
//               post_ball: post_ball,
//               use_magic: use_magic,
//               damage: damage,
//               beat: 1 
//             };
//           	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param2})
//             .always(function(data){
//               console.log(data);
//             });
            seDamage.stop();
            game.end(maxComboCount, 'MAX COMBO: ' + maxComboCount);
            alert('congratulation');
            window.location.replace('/'+lang+'/rank/damage/');
          }else if(my_hp < 1){
//             var damage = start_enemy_hp - enemy_hp; 
//             var post_q_txt = '/en/in/puzzle/';
//             var param2 = {
//               post_ball: post_ball,
//               use_magic: use_magic,
//               damage: damage,
//               beat: 0  
//             };
//           	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param2})
//             .always(function(data){
//               console.log(data);
//             });
//             game.end(maxComboCount, 'MAX COMBO: ' + maxComboCount);
            alert('oh! sorry');
            window.location.replace('/'+lang+'/rank/damage/');
          }
				}
			}
			if(frameStatus>0) {
				frameStatus -= fallSpeed;
			}
		});
	}
    game.start();
};

function allPanelTouchEnabled(flg) {
	isAllPanelTouchEnabled = flg;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			panel[i][j].touchEnabled = isAllPanelTouchEnabled;
		}
	}
  
  if(flg==true){
  
  }
  
}

function allPanelFlush() {
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			if(panel[i][j].opacity==0.0) panel[i][j].opacity = 1.0;
      if(panel[i][j].opacity==0.01) panel[i][j].opacity = 1.0;
		}
	}
}

function trimPanel() {
	for(var i=0; i<width; i++) {
		var count = 0;
		for(var j=height-1; j>=0; j--) {
			if(panel[i][j].frame==-1) count++;
			if(frameStatus<count*panelHeight) frameStatus = count*panelHeight;
			if(count>0) panel[i][j].opacity = 0.9;
		}
		var k = height-1;
		for(var j=height-1; j>=0; j--) {
			while(k>=0 && panel[i][k].frame==-1) k--;
			if(k>=0) {
				panel[i][j].frame = panel[i][k].frame;
				panel[i][j].y = panel[i][k].y;
			} else {
				panel[i][j].frame = framequeue[z]; z++;
				panel[i][j].y = panel[i][j].y-(count*panelHeight);
			}
			k--;
		}
	}
}

function getBingoXY() {
	var count = 0;
	bingoPanelXY = new Array(width);
	for(var i=0; i<width; i++) {
		bingoPanelXY[i] = new Array(height);
		for(var j=0; j<height; j++) {
			bingoPanelXY[i][j] = 0;
			if(panel[i][j].opacity==0.5) {
				bingoPanelXY[i][j] = 1;
				count++;
        bomb = '/public/stg1/crash1.png';
        var crash = new Crash();
        crash.x = panel[i][j].x;
        crash.y = panel[i][j].y;
        game.rootScene.addChild(crash);
        attack0();          
			}else{
        panel[i][j].opacity = 0.01;
			}
      
		}
	}
	return count;
}

function checkBingo() {
	var count = 0;
	var curFrame = undefined;
	var bingoCount = 1;
	var thisComboCount = 0;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			if(curFrame!=undefined && curFrame==panel[i][j].frame) {
				bingoCount++;
			
			} else {
				if(bingoCount>=3) {
					var chainFlg = false;
					if(i>0) {
						for(var k=1; k<=bingoCount; k++) {
							if(panel[i-1][j-k].frame==curFrame) {
								chainFlg = true;
								break;
							}
						}
					}
					count += bingoCount;
					thisComboCount++;
				}
				bingoCount = 1;
				curFrame = panel[i][j].frame;
			}
			if(bingoCount>=3) {
				panel[i][j].opacity = 0.5;
				panel[i][j-1].opacity = 0.5;
				panel[i][j-2].opacity = 0.5;
			}
		}
		if(bingoCount>=3) {
			var chainFlg = false;
			if(i>0) {
				for(var k=1; k<=bingoCount; k++) {
					if(panel[i-1][height-k].frame==curFrame) {
						chainFlg = true;
						break;
					}
				}
			}
			count += bingoCount;
      
			thisComboCount++;
		}
		curFrame = undefined;
		bingoCount = 1;
    
	}
	curFrame = undefined;
	bingoCount = 1;
	for(var j=0; j<height; j++) {
		for(var i=0; i<width; i++) {
			if(curFrame!=undefined && curFrame==panel[i][j].frame) {
				bingoCount++;
			} else {
				if(bingoCount>=3) {
					var chainFlg = false;
					if(j>0) {
						for(var k=1; k<=bingoCount; k++) {
							if(panel[i-k][j-1].frame==curFrame) {
								chainFlg = true;
								break;
							}
						}
					}
					count += bingoCount;
					thisComboCount++;
				}
				bingoCount = 1;
				curFrame = panel[i][j].frame;
			}
			if(bingoCount>=3) {
				panel[i][j].opacity = 0.5;
				panel[i-1][j].opacity = 0.5;
				panel[i-2][j].opacity = 0.5;
      }
		}
		if(bingoCount>=3) {
			var chainFlg = false;
			if(j>0) {
				for(var k=1; k<=bingoCount; k++) {
					if(panel[width-k][j-1].frame==curFrame) {
						chainFlg = true;
						break;
					}
				}
			}
			count += bingoCount;
			thisComboCount++;
		}
		curFrame = undefined;
		bingoCount = 0;
	}
	return thisComboCount;
}

function clearBingo() {
	var count = 0;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			if(panel[i][j].opacity==0.5) {
        panel[i][j].frame = framequeue[z]; z++;
				panel[i][j].opacity = 1.0;
				count++;
			}else{
        panel[i][j].opacity = 1.0;
			}
		}
	}
	return count;

}

function copyArray(arr){
	var newarr = [];
	var length = arr.length;
	for(var i=0; i<length; i++){
		newarr[i] = copyArray(arr[i]);
	}
	return newarr;
}

$('#magic').click(function() {
  if ($('#set').text()==1){
    alert('already set');
  }else{
    var magic = $('#magic').text();
    if(magic>0){
      $('#set').empty().append(1);
      $('#magic').empty().append(--magic);
      alert('set bomb');
      use_magic = Array(turn,1);
    }else{
      alert('no magic power');
    }
  }
});

function attack0(){
  var damage = my_lv/enemy_lv;
  enemy_hp = enemy_hp - damage;

  $('#enemy_hp').css("width",enemy_hp*gage/mt_monster_hp);
  $('#enemy_hp').empty().append(enemy_hp);
  
  $('#set').empty().append(0);
}
