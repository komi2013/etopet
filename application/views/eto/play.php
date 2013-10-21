
<div id="enchant-stage"></div>

<script src="/public/game/stg1/enchant-0.4.0.js"></script>

<script src="/public/javascript/jquery-1.7.1.min.js"></script>

<script src="/public/game/stg1/nineleap.js"></script>

<?php

if($status->level < 3){
  $chara_1 = 0;
  $chara_2 = 0;
  $chara_3 = 0;
  $goal = 170;
}elseif($status->level < 5){
  $chara_1 = 30;
  $chara_2 = 30;
  $chara_3 = 30;
  $goal = 120;
}elseif($status->level < 10){
  $chara_1 = 5;
  $chara_2 = 10;
  $chara_3 = 30;
  $goal = 200;
}else{

}

?>

<script type="text/javascript">

// var limit_time = <?='10';?>;
// it must be chara_1 < chara_2 < chara_3 
var chara_1 = '<?=$chara_1;?>';
var chara_2 = '<?=$chara_2;?>';
var chara_3 = '<?=$chara_3;?>';
var limit_time = 15;
var lang = '<?=$lang;?>';
var score_pass = '<?=$score_pass;?>';
var goal = '<?=$goal;?>';
var congrats = '<?=__("congratulation");?>';
var sorry = '<?=__("sorry");?>';
var str_score = '<?=__("score");?>';


</script>

<script type="text/javascript" src="/public/game/stg1/index1.js"></script>

<meta name="viewport" content="width=device-width">

<style type="text/css">
#enchant-stage{
 width:320px;
 height:360px;
-- padding: 5px;
}
</style>


