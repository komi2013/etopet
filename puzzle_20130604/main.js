//ゲーム
enchant();
var game;
var panel=undefined, width=undefined, height=undefined;
var panelWidth=64, panelHeight=64;
var bingoPanelXY = undefined;
var clearPanelCount=0, maxComboCount=0, comboCount=0, restMoveCount=50;
var frameStatus = 0;
var fallSpeed = 16;
var panelKindStart = 0;
var panelKindCount = 6;
var isAllPanelTouchEnabled = true;
var outMargin = 4;
var phpanel = [1,2,3,0,4,5,6,7,8,9,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0];
// var phpanel = <?php echo json_code(array(1,2,3,0,4,5,5,4,3,2,1,0,5,4,3,2,1,2,3,4,5,1,0,4,3,2,1,5,1,2));?>;
var Panel = enchant.Class.create(enchant.Sprite, {
	initialize: function(w, h, php_z) {
		enchant.Sprite.call(this, panelWidth, panelHeight);
		this.image = game.assets['panel.png'];

// 		this.frame = panelKindStart+Math.floor(Math.random()*panelKindCount);

		this.frame = php_z;
    
// console.log(panelKindStart+Math.floor(Math.random()*panelKindCount));

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

window.onload = function() {
//	enchant.Sound.enabledInMobileSafari = true;
	var scoreLabelHeight = 16;
	var gameWidth = panelWidth*6;
	var gameHeight = (panelHeight*5)+(scoreLabelHeight*3);
	game = new Game(gameWidth, gameHeight);
	width = Math.floor(gameWidth/panelWidth);
	height = Math.floor((gameHeight-scoreLabelHeight)/panelHeight);
	game.fps = 15;
	game.score = 0;
	game.preload('panel.png', 'bingo.wav', 'combo.wav');
	game.onload = function() {
		var startX=-1, startY=-1, endX=-1, endY=-1;
		var thisFrame = undefined;
		var movePanel = undefined;
		var seBingo = game.assets['bingo.wav'].clone();
		var seCombo = game.assets['combo.wav'].clone();
		panel = new Array(width);
		for(var w=0; w<width; w++) panel[w] = new Array(height);
    var z=0;
		for(var w=0; w<width; w++) {
      for(var h=0; h<height; h++) {
        
				panel[w][h] = new Panel(w,h, phpanel[z]);
        z++;
//         console.log(phpanel[z]);
			}
		}
		var maxComboText = 'MAX COMBO: ';
		var maxComboLabel = new MutableText(5, gameHeight-scoreLabelHeight*3, gameWidth, maxComboText+'0');
        game.rootScene.addChild(maxComboLabel);
		var clearPanelText = 'CLEAR PANEL: ';
		var clearPanelLabel = new MutableText(5, gameHeight-scoreLabelHeight*2, gameWidth, clearPanelText+'0');
        game.rootScene.addChild(clearPanelLabel);
		var restMoveText = 'REST MOVE: ';
		var restMoveLabel = new MutableText(5, gameHeight-scoreLabelHeight*1, gameWidth, restMoveText+restMoveCount);
		game.rootScene.addChild(restMoveLabel);
		var comboLabel = new MutableText(0, 0, gameWidth, '');
		comboLabel.opacity = 0.0;
		game.rootScene.addChild(comboLabel);
//     var test_i = 0;
		while(checkBingo()!=0) {
//       test_i++;
			var count = clearBingo();
// 		  console.log('clear '+test_i);
		}
		game.rootScene.addEventListener(Event.TOUCH_START, function(e) {
		//	console.log('touchstart');
		//	console.log('xy '+startX+' '+startY);

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
//       console.log(movePanel.frame);
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
		});
		game.rootScene.addEventListener(Event.ENTER_FRAME, function(e) {
			if(movePanel!=undefined) return;
			allPanelFlush();
			if(frameStatus==0) {
				var thisComboCount = checkBingo();
				if(thisComboCount>0) {
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
					if(restMoveCount<=0) game.end(maxComboCount, 'MAX COMBO: ' + maxComboCount);
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
				panel[i][j].frame = 1;
// 				panel[i][j].frame = panelKindStart+Math.floor(Math.random()*panelKindCount);
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
			}
		}
	}
	return count;
}

function checkBingo() {
//   var post_q_txt = '/en/in/game/bingo/';
//   var param = new Object();
//   var z = 0;
// 	for(var i=0; i<width; i++) {
// 	 for(var j=0; j<height; j++) {
//       param[z] = panel[i][j].frame;
//       z++ 
//    }
//   }
// 
// 	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param})
//   .always(function(data){
//     console.log(data);
// //     console.log(data[0][0].frame);
// //     if(data['chk'] == 1){
// //       $(cli).siblings('.success').fadeIn(10); 
// //       $(cli).siblings('.success').fadeOut(1000);
// //       $(cli).parent("div").css( 'background-color','#e0ffff')
// //     } else {
// //       $(cli).siblings(".freetxt").text(data['q_txt'])
// //     }
//   });
	var count = 0;
	var curFrame = undefined;
	var bingoCount = 1;
	var thisComboCount = 0;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {

      console.log(panel[i][j].frame);
      
			if(curFrame!=undefined && curFrame==panel[i][j].frame) {
				bingoCount++;
			//	console.log('i:'+i+' j:'+j);
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
	return thisComboCount;
}

function clearBingo() {
	var count = 0;
	for(var i=0; i<width; i++) {
		for(var j=0; j<height; j++) {
			if(panel[i][j].opacity==0.5) {
			//	console.log('clear! i:'+i+' j:'+j);
// 				panel[i][j].frame = 2;
				panel[i][j].frame = panelKindStart+Math.floor(Math.random()*panelKindCount);
				panel[i][j].opacity = 1.0;
				count++;
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
