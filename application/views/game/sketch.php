<div class="demo" id="colors_demo">
<div class="tools">
  <input type="button" value="option">
  <a href='#colors_sketch' id='save_img' style='background: #ccc'>save</a> 
</div>
</div>
<canvas id="colors_sketch" width="300" height="350"></canvas>

<script src="/public/doodle/sketch.js?ver=1"></script>

<script type="text/javascript">
var img = new Image();
img.src = '<?=$sketch_bg;?>';

$(function() {

  $.each(['#f00', '#ff0', '#0f0', '#0ff', '#00f', '#f0f', '#000', '#fff'], function() {
//     console.log('color '+this);
    $('#colors_demo .tools').append("<a href='#colors_sketch' data-color='" + this + "' style='width: 10px; background: " + this + ";'> </a> ");
  });
  $.each([3, 5, 10, 15], function() {
    $('#colors_demo .tools').append("<a href='#colors_sketch' data-size='" + this + "' style='background: #ccc'>" + this + "</a> ");
  });
//   $('#colors_demo .tools').append("<a href='#colors_sketch' id='save_img' style='background: #ccc'>save</a> ");
  $('#colors_sketch').sketch();
//   var canvas = document.getElementById('colors_sketch');
//   var ctx = canvas.getContext('2d');
//   ctx.drawImage(img, 0, 0);
//   ctx.globalCompositeOperation = "source-over";
//   ctx.globalAlpha = 1.0;
 
});

$('#save_img').click(function() {
    console.log('num '+this);
    var canvas = document.getElementById('colors_sketch');
    var imgdata = canvas.toDataURL();
//     document.getElementById("i1").src = imgdata;
    var post_q_txt = '/en/in/game/sketch/';
    var param = {
      img  : imgdata
    };
  	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param})
    .always(function(data){
      if(data['chk'] == 1){
        $('#myname').append(myname);
        $('#mymsg').append($('#msg').val());
        $('#myimg').attr("src",myimg);
        $('#line').append('-------------------------------');
      }else{
        console.log(data);
      }
    });
});

$('.tools input').toggle(function(){
  $('.tools a').css("display",'inline-block');
//   $('.run').css("display", "none");
},
function(){
  $('.tools a').css("display",'none');
//   $('.run').css("display", "block");
});



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
#colors_sketch {
--background-image: url("");
}
</style>

