
<script type="text/javascript" src="/public/game/puzzle/enchant.min.js"></script>
<script type="text/javascript" src="/public/game/puzzle/nineleap.enchant.js"></script>
<script type="text/javascript" src="/public/game/puzzle/ui.enchant.js"></script>

<script type="text/javascript" src="/public/game/puzzle/draw.text.js"></script>
<meta name="viewport" content="width=device-width">

<script type="text/javascript">

//  ui.enchant.js, draw.text.js, nineleap.enchant.js absolute png 

var panel_png = '/public/game/puzzle/arms.png';
var framequeue = <?=json_encode($framequeue);?>;
var enemy_lv = 7;
var my_lv = 4;
var max_mpk = 10;
var enemy_img = "/public/img/tengu.jpg";
var lang = "<?=Request::current()->param('lang');?>";

</script>

<button id="enemy_hp"  style="width:300px;">100</button>
<div id="enchant-stage"></div>
<button id="my_hp" style="width:300px;">10</button>
<br>
<div id="magic2">
  <img src="/public/img/bomb.png" width="32"><a id="magic">3</a>
</div>
<div id="set">0</div>


<style type="text/css">

#enemy_hp{
 background-color: #A4B1E5;
}

#my_hp{
 background-color: #C6B329;
}
#enchant-stage{
 background-image: url("/public/img/tengu.jpg");
 width:290px;
 height:340px;
-- padding: 0px 5px 0px 5px;
-- cursor: pointer;
-- margin: 0 auto;
}
#magic2{
 cursor: pointer;
}
#set{
 visibility: hidden;
}


</style>

<script type="text/javascript" src="/public/game/puzzle/main3.js"></script>
