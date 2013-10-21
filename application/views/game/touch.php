
<style type="text/css">
body {
 width:640px;
-- margin: 0 auto;
}

#content {
 float: left;
 width: 320px;
}
 screen and (max-width: 480px) {
   /* 480px以下の場合 */
  body {
   width:320px;
--   margin: 0 auto;
  }
  
  #content {
   width: 320px;
  }
  #enchant-stage{
   width:320px;
   height:350px;
  -- padding: 10px;
  }
}
</style>

<div id="enchant-stage"></div>

<script src="/public/game/stg1/enchant-0.4.0.js"></script>

<script src="/public/game/stg1/nineleap.js"></script>

<script src="/public/javascript/jquery-1.7.1.min.js"></script>

<script type="text/javascript">

// it must be chara_1 < chara_2 < chara_3 
var chara_1 = 5;
var chara_2 = 10;
var chara_3 = 30;
var limit_time = 20;
var lang = '<?=$lang;?>';
var score_pass = '123';
var goal = 50;
var congrats = '<?=__("congratulation");?>';
var sorry = '<?=__("sorry");?>';
var str_score = '<?=__("score");?>';


</script>

<script type="text/javascript" src="/public/game/stg1/index2.js"></script>
<meta name="viewport" content="width=device-width">
