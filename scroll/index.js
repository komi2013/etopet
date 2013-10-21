// 移動閾値
var THRESHOLD = 50;

// スクロール量（随時更新）
var scrollDist = { x: 0, y: 0 };

// 要素取得を簡易化
function $(selector) {
  return document.querySelectorAll(selector);
}

// ----

// マウス移動時：
// 画面の座標を更新し、移動量も更新する
document.onmousemove = function(event) {
  // IE対策
  if (!event) {
    event = window.event;
  }
  
  var x = event.clientX;
  var y = event.clientY;
  $('#mousex')[0].innerHTML = x;
  $('#mousey')[0].innerHTML = y;

  // 移動量を更新
  updateScrollDist(x, y);
};

// 画面スクロール時：
// 画面の表示を更新
window.onscroll = function(event) {
  $('#dispx')[0].innerHTML = document.documentElement.scrollLeft;
  $('#dispy')[0].innerHTML = document.documentElement.scrollTop;
};

// 画面サイズ変更時：
// 画面の表示を更新
window.onresize = function(event) {
  $('#dispw')[0].innerHTML = document.documentElement.clientWidth;
  $('#disph')[0].innerHTML = document.documentElement.clientHeight;
};

// 画面読み込み完了時：
// 画面の表示を更新し、移動の監視を開始
window.onload = function(event) {
  window.onresize();
  setInterval(function() {
      autoScroll(scrollDist.x, scrollDist.y);
  }, 10);
};

// ----

// スクロールを実行する。
function autoScroll(x, y) {
  window.scrollBy(x, y);
}

// スクロール量を更新する。
// マウス座標を受け取る。
function updateScrollDist(x, y) {
  scrollDist.x = getDistanceX(x);
  scrollDist.y = getDistanceY(y);

  $('#accellx')[0].innerHTML = scrollDist.x;
  $('#accelly')[0].innerHTML = scrollDist.y;
}

// 横方向の移動量を計算して返す。
function getDistanceX(x) {
    var width = document.documentElement.clientWidth;
    var distance = getDistance(x, width);
    return distance;
}

// 縦方向の移動量を計算して返す。
function getDistanceY(y) {
    var height = document.documentElement.clientHeight;
    var distance = getDistance(y, height);
    return distance;
}

// 移動量を計算して返す。
function getDistance(pos, max) {
  // 移動距離
  var distance = 0;

  // 原点方向へ移動
  var diff = pos - THRESHOLD;
  if (diff < 0) {
    distance = Math.max(diff, -THRESHOLD);
  }
  // 原点から逆方向へ移動
  else {
    diff = pos - (max - THRESHOLD);
    if (diff > 0 ){
      distance = Math.min(diff, THRESHOLD);
    }
  }

  return distance;
}

