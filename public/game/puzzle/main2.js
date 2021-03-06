//ゲーム
enchant();
var game;
var panel=undefined, width=undefined, height=undefined;
var panelWidth=64, panelHeight=64;
var bingoPanelXY = undefined;
var clearPanelCount=0, maxComboCount=0, comboCount=0, restMoveCount=500;
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
var bomb = '/public/game/puzzle/crash.png';
var bomb_0 = '/public/game/puzzle/crash.png';
var bomb_1 = '/public/game/puzzle/crash.png';
var bomb_2 = '/public/game/puzzle/crash.png';
var bomb_3 = '/public/game/puzzle/crash.png';
var bomb_4 = '/public/game/puzzle/crash.png';
var bomb_5 = '/public/game/puzzle/crash.png';
var bomb_6 = '/public/game/puzzle/crash.png';
var framequeue = framequeue;
var enemy_lv = enemy_lv;
var my_lv = my_lv;
var turn = 0;
var z = 0;
var enemy_hp_before = $('#enemy_hp').text();
var enemy_hp = $('#enemy_hp').text();
var my_hp = $('#my_hp').text();
var POST = Object();
var use_magic = 0;
var gage = $('#my_hp').css("width");
var my_damage = gage/max_mpk;
// var phpanel = <?php echo json_code(array(1,2,3,0,4,5,5,4,3,2,1,0,5,4,3,2,1,2,3,4,5,1,0,4,3,2,1,5,1,2));?>;
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
        if (this.frame > 64) {
            this.parentNode.removeChild(this);
        }
    },
});
  
window.onload = function() {
//	enchant.Sound.enabledInMobileSafari = true;
	var scoreLabelHeight = 0;
	var gameWidth = panelWidth*5;
	var gameHeight = (panelHeight*6);
	game = new Game(gameWidth, gameHeight);
	width = Math.floor(gameWidth/panelWidth);
	height = Math.floor((gameHeight-scoreLabelHeight)/panelHeight);
	game.fps = 15;
	game.score = 0;
	game.preload(panel_png,bingo_wav,combo_wav,bomb,bomb_0,bomb_1,bomb_2,bomb_3,bomb_4,bomb_5,bomb_6);
	game.onload = function() {
		var startX=-1, startY=-1, endX=-1, endY=-1;
		var thisFrame = undefined;
		var movePanel = undefined;
		var seBingo = game.assets[bingo_wav].clone();
		var seCombo = game.assets[combo_wav].clone();
		panel = new Array(width);
		for(var w=0; w<width; w++) panel[w] = new Array(height);
//     var z=0;
		for(var w=0; w<width; w++) {
      for(var h=0; h<height; h++) {
        
				panel[w][h] = new Panel(w,h);
//         z++;
//         console.log(phpanel[z]);
			}
		}
		var maxComboText = 'MAX COMBO: ';
		var maxComboLabel = new MutableText(5, gameHeight-scoreLabelHeight*3, gameWidth, maxComboText+'0');
//         game.rootScene.addChild(maxComboLabel);
		var clearPanelText = 'CLEAR PANEL: ';
		var clearPanelLabel = new MutableText(5, gameHeight-scoreLabelHeight*2, gameWidth, clearPanelText+'0');
//         game.rootScene.addChild(clearPanelLabel);
		var restMoveText = 'REST MOVE: ';
		var restMoveLabel = new MutableText(5, gameHeight-scoreLabelHeight*1, gameWidth, restMoveText+restMoveCount);
// 		game.rootScene.addChild(restMoveLabel);
		var comboLabel = new MutableText(0, 0, gameWidth, '');
		comboLabel.opacity = 0.0;
// 		game.rootScene.addChild(comboLabel);
		while(checkBingo()!=0) {
			var count = clearBingo();
		//	console.log('clear '+count);
		}
		game.rootScene.addEventListener(Event.TOUCH_START, function(e) {
      if(turn==0) POST['thisComboCount'] = 0
      turn++; my_hp--; use_magic = 0;
      $('#my_hp').css("width", my_hp*my_damage);
      $('#my_hp').text(my_hp);
			if(e.x<=0 || gameWidth<=e.x || e.y<=0 || (gameHeight-scoreLabelHeight)<=e.y) return;
		//	if(checkBingo()!=0) return;
			
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
		//	console.log('touchmove');
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
				//clearPanelLabel.text = clearPanelText+game.score+maxComboText+maxComboCount+restMoveText+restMoveCount;
				restMoveLabel.text = restMoveText+restMoveCount;
        POST[turn] = Array(turn,startX,startY,endX,endY);
			}
			startX = parseInt(e.x/panelWidth);
			startY = parseInt(e.y/panelHeight);
			if(restMoveCount<=0) {
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
        
		//	console.log('touchend');
		//	console.log('xy '+endX+' '+endY);
			if(startX==-1 || startY==-1) return;
			if(movePanel==undefined) return;
		//	if(e.x<=0 || gameWidth<=e.x || e.y<=0 || (gameHeight-scoreLabelHeight)<=e.y) return;
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
//       $('#set').empty().append(0);      
		});
		game.rootScene.addEventListener(Event.ENTER_FRAME, function(e) {
			if(movePanel!=undefined) return;
			allPanelFlush();
			if(frameStatus==0) {
				var thisComboCount = checkBingo();
				if(thisComboCount>0) {
          attack(thisComboCount);
				//	console.log('checkBingo');
					var count = getBingoXY();
					if(thisFrame==undefined || thisFrame==0) {
						thisFrame = game.frame;
					//	console.log('thisFrame:'+thisFrame+' count='+count+' thisComboCount='+thisComboCount);
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
									//	console.log('comboCount='+comboCount);
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
					if(isAllPanelTouchEnabled==false) allPanelTouchEnabled(true);

          var post_q_txt = '/en/in/puzzle/';
          POST['damage'] = enemy_hp_before - enemy_hp;
          var param2 = {data:POST};

					if(my_hp < 1){
            alert('残念');
            $.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param2});
            window.location.replace('/ja/main/');
          }else if(enemy_hp < 1){
            alert('おめでとうございます');
          	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param2});
            window.location.replace('/ja/rank/damage/'+POST['damage']+'/');
          }
				}
			}
			if(frameStatus>0) {
			//	console.log('frameStatus='+frameStatus);
				frameStatus -= fallSpeed;
			}
		});
	}
    game.start();
};

function allPanelTouchEnabled(flg) {
//	console.log('allPanelTouchEnabled='+flg);
// console.log('touch panel disable');
	isAllPanelTouchEnabled = flg;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			panel[i][j].touchEnabled = isAllPanelTouchEnabled;
		}
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
// 				panel[i][j].frame = panelKindStart+Math.floor(Math.random()*panelKindCount);
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
        if(panel[i][j].frame==0 && my_lv > 1){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else if(panel[i][j].frame==0 && my_lv > 2){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else if(panel[i][j].frame==0 && my_lv > 3){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else if(panel[i][j].frame==0 && my_lv > 4){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else if(panel[i][j].frame==0 && my_lv > 5){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else if(panel[i][j].frame==0 && my_lv > 6){
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack2();
        }else{
          bomb = '/public/game/puzzle/crash.png';
          var crash = new Crash();
          crash.x = panel[i][j].x;
          crash.y = panel[i][j].y;
          game.rootScene.addChild(crash);
          attack0();          
        }          
			}else{
//         console.log(panel[i][j].opacity);
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
//       console.log(panel[i][j].frame);
			if(curFrame!=undefined && curFrame==panel[i][j].frame) {
				bingoCount++;
			
			} else {
				if(bingoCount>=3) {
					var chainFlg = false;
					if(i>0) {
						for(var k=1; k<=bingoCount; k++) {
							if(panel[i-1][j-k].frame==curFrame) {
								chainFlg = true;
							//	console.log('chainFlg i-1:'+(i-1)+' j-k:'+(j-k));
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
			//	console.log('bingo! i:'+i+' j:'+j);
				panel[i][j].opacity = 0.5;
				panel[i][j-1].opacity = 0.5;
				panel[i][j-2].opacity = 0.5;
// 			}else{
//         panel[i][j].opacity = 0.8;
			}
		}
		if(bingoCount>=3) {
			var chainFlg = false;
			if(i>0) {
				for(var k=1; k<=bingoCount; k++) {
					if(panel[i-1][height-k].frame==curFrame) {
						chainFlg = true;
					//	console.log('chainFlg i-1:'+(i-1)+' height-k:'+(height-k));
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
			//	console.log('i:'+i+' j:'+j);
			} else {
				if(bingoCount>=3) {
					var chainFlg = false;
					if(j>0) {
						for(var k=1; k<=bingoCount; k++) {
							if(panel[i-k][j-1].frame==curFrame) {
								chainFlg = true;
							//	console.log('chainFlg i-k:'+(i-k)+' j-1:'+(j-1));
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
			//	console.log('bingo! i:'+i+' j:'+j);
				panel[i][j].opacity = 0.5;
				panel[i-1][j].opacity = 0.5;
				panel[i-2][j].opacity = 0.5;
// 			}else{
//         panel[i][j].opacity = 0.8;
      }
		}
		if(bingoCount>=3) {
			var chainFlg = false;
			if(j>0) {
				for(var k=1; k<=bingoCount; k++) {
					if(panel[width-k][j-1].frame==curFrame) {
						chainFlg = true;
					//	console.log('chainFlg width-k:'+(width-k)+' j-1:'+(j-1));
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
//   console.log(thisComboCount);
	return thisComboCount;
}

function clearBingo() {
	var count = 0;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			if(panel[i][j].opacity==0.5) {
			//	console.log('clear! i:'+i+' j:'+j);
// 				panel[i][j].frame = panelKindStart+Math.floor(Math.random()*panelKindCount);
        panel[i][j].frame = framequeue[z]; z++;
				panel[i][j].opacity = 1.0;
				count++;
			}else{
//         console.log(panel[i][j].opacity);
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

// function setMagic(){
// var use_magic
  $('#magic').click(function() {
    if ($('#set').text()==1){
      alert('already set');
    }else{
      var magic = $('#magic').text();
      if(magic>0){
//         use_magic = 1;
        $('#set').empty().append(1);
        $('#magic').empty().append(--magic);
        alert('set bomb');
        POST['use_magic'] = Array(turn,1);
//         POST['use_magic']++;
      }else{
        alert('no magic power');
      }
    }
  });
// }

function attack(thisComboCount){
  var sp_attack = 0; 
  if($('#set').text()==1) sp_attack = 20;
   
  var damage = (thisComboCount/(enemy_lv - my_lv) + sp_attack);
  
  
  enemy_hp = enemy_hp - damage;

  $('#enemy_hp').css("width",enemy_hp*gage/100);
  $('#enemy_hp').empty().append(enemy_hp);
  
  $('#set').empty().append(0);
}
function attack2(){
  var damage = (my_lv + 3)/enemy_lv;
  enemy_hp = enemy_hp - damage;

  $('#enemy_hp').css("width",enemy_hp*gage/100);
  $('#enemy_hp').empty().append(enemy_hp);
  
  $('#set').empty().append(0);
}
function attack0(){
  var damage = my_lv/enemy_lv;
  enemy_hp = enemy_hp - damage;

  $('#enemy_hp').css("width",enemy_hp*gage/100);
  $('#enemy_hp').empty().append(enemy_hp);
  
  $('#set').empty().append(0);
}
