

<script type="text/javascript" src="/public/game/puzzle/enchant.min.js"></script>
<script type="text/javascript" src="/public/game/puzzle/nineleap.enchant.js"></script>
<script type="text/javascript" src="/public/game/puzzle/ui.enchant.js"></script>
<script type="text/javascript" src="/public/game/puzzle/draw.text.js"></script>
<meta name="viewport" content="width=device-width">

<script type="text/javascript">

//  ui.enchant.js, draw.text.js, nineleap.enchant.js absolute png 

var panel_png = '/public/game/puzzle/panel.png';
var framequeue = <?=json_encode($framequeue);?>;
var enemy_lv = '<?=$mt_monster_lv->defence;?>';
var my_lv = '<?=$status->level;?>';
var max_mpk = '<?=$mt_level->max_mpk;?>';
var enemy_img = '<?=$mt_monster_lv->img;?>';
var lang = '<?=$lang;?>';
var mt_monster_hp = '<?=$mt_monster_lv->hp;?>';

</script>
<button id="enemy_hp"  style="width:<?=$monster_hp/ $mt_monster_lv->hp * 300;?>px;"><?=$monster_hp;?></button>
<div id="enchant-stage"></div>
<button id="my_hp" style="width:<?=$energy/ $mt_level->max_mpk * 300;?>px;"><?=$energy;?></button>
<br>
<div id="magic2">
  <img src="/public/img/bomb.png" width="32"><a id="magic"><?=$status->magic;?></a>
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
 background-image: url("<?=$mt_monster_lv->img;?>");
 width:300px;
 height:350px;
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


<script type="text/javascript" src="/public/game/puzzle/main.js?var=7"></script>
