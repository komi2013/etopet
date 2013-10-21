<div id="movie">

</div>


<script type="text/javascript">

// $(function(){
// 	setTimeout(function(){
// 		～ここに処理を記載～
// 	},1000);
// });
// 
//   $(this).siblings('.cho_txt').each(function(i){
//     arr[i] = $(this).val();
//   });

var timestamp = '<?=$json_timestamp;?>';
// var test1 = timestamp[0];
timestamp = eval(timestamp) ;

var cnt = -1;
var num = '<?=$cnt_all;?>';
setInterval("hyoji()",1000);



function hyoji()
{
  //表示する文字
  var str = "一文字ずつ表示します。";  

  //文字が全部表示されているか確認
  if ( cnt < num )
  {
    console.log(cnt);
    //現在より1文字多く切り出して表示
//     document.timer.moji.value = str.substr(0,cnt+1);
    $('#movie').css("background-image", "url('/public/png/first/"+timestamp[++cnt]+".png')");
  }
  else
  {
    //全て表示されたら、空文字に戻す
//     document.timer.moji.value = "";
    cnt = -1;
  }
}


// var i = 0;
// var arr_img = '/public/png/first/'+timestamp+'.png';

// jQuery.each(, function() {
// //    $("#movie").text("My id is " + this + ".");
//   var timestamp = this;
// //   setTimeout(function(){
//     console.log('this '+timestamp);
//     alert('stop');
//     $('#movie').css("background-image", "url('/public/png/first/"+timestamp+".png')");
// //   },1000);
// //    return (this != "four"); // will stop running to skip "five"
// });

</script>


<style type="text/css">
.tools a {
  border: 1px solid black;
  color: black;
  display: none;
  font-weight: bold;
  height: 30px;
  line-height: 30px;
  padding: 0 10px;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
}
#movie {
  width : 300px;
  height: 350px;
}
</style>

