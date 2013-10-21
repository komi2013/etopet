<meta name="viewport" content="width = device-width, initial-scale = 1.0, user-scalable = no">
<link href="/public/doodle/colorpicker.css" rel="stylesheet">
<link href="/public/doodle/literally.css" rel="stylesheet">

<style type="text/css">
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    margin: 0;
  }

  .fs-container {
    position: fixed;
    width: 100%;
    height: 100%;
  }

  .literally {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100%;
  }

  /* let's make things a bit bigger */
  .toolbar-row {
    display: none;
  }
  .literally .button, .literally .zoom-display {
    line-height: 28px;
    font-size: 18px;
  }

  .literally .toolbar-row-right {
    width: 20em;
  }

  .literally .button {
    padding: 5px 15px 5px 15px;
  }

  .literally .button.color-square {
    display: block;
    padding-top: 10px;
    height: 23px;
  }

  .literally .tools .button {
    padding: 6px 13px 2px 15px;
    line-height: 24px;
  }

  .literally .tools .button img {
    width: 24px;
    height: 24px;
  }

  .literally input[type=range] {
    width: 200px;
  }


</style>
</head>

<body>

<div class="fs-container">
  <div class="literally"><canvas id='c1'></canvas></div>
</div>

<a id="save_img">save img</a>
<img id="i1">
<a id="data_url_png">img here</a>

<script src="/public/doodle/literallycanvas.js?cer=1"></script>

<script type="text/javascript">




$(document).ready(function() {
  // disable scrolling on touch devices so we can actually draw
  $(document).bind('touchmove', function(e) {
    if (e.target === document.documentElement) {
      return e.preventDefault();
    }
  });

  // the only LC-specific thing we have to do
  $('.literally').literallycanvas();
});

$('#save_img').click(function() {
    var canvas = document.getElementById('c1');
    var imgdata = canvas.toDataURL();
    document.getElementById("i1").src = imgdata;
    var post_q_txt = '/en/in/game/test1/';
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



</script>

