<br>

<div>
  <img border="1" src="/public/stg1/snake.jpg" width="290" height="290">
</div>
<div class="a_button">
  <a href="/<?=$lang;?>/main/think"><?=__('think');?></a>
  <a href="/<?=$lang;?>/main/play"><?=__('play');?></a>
  <a href="/<?=$lang;?>/main/team"><?=__('team');?></a>
</div>

<a><?=__('level');?> <?=$status->level;?></a>
<br>

<?php if($ch_lv == 'up'){ ?>
  <img border="1" src="/public/img/lvup.gif">
  <br>
<?php } ?>

<?php if($present_cnt > 0){ ?>
  <a href="/<?=$lang;?>/main/present/"><?=__('you received present');?></a>
  <br>
<?php } ?>

<a><?=__('experience');?></a>
<div class="outline">
  <button class="exp" style="width:<?=$status->exp / $mt_level->goal_exp * 240;?>px;"><?=$status->exp;?></button>
</div>
<a><?=__('energy');?></a>
<div class="outline">
  <button class="mpk" style="width:<?=$status->manpuku / $mt_level->max_mpk * 240;?>px;"><?=$status->manpuku;?></button>
</div>

<script type="text/javascript">
var err_msg = '<?=$err_msg;?>';
if(err_msg){
  alert(err_msg);
}

</script>

<style type="text/css">
.warn{
 color: red;
}
a{
 align: right;
}
.title{
 box-shadow: 1px 1px 5px #aaa;
}
.outline .exp{
 background-color: #A4B1E5;
}

.outline .mpk{
 background-color: #C6B329;
}

.outline{
 width: 240px;
 border: 2px solid;
 border-color: black;
-- background-color: #99cc00;
}
.a_button a {
  font-size: 1.2em;
   /* ▼枠線 */
   border-style: solid;
   border-width: 1px;
   border-color: #ccc #999 #999 #ccc;
   /* ▼角丸 */
   -webkit-border-radius: 7px; /* Chrome,Safari */
   -moz-border-radius: 7px;    /* Firefox */
   border-radius: 7px;         /* CSS3 */
   /* ▼余白 */
   padding: 0.3em 0.9em;
--margin: 0px 0.3em;
   /* ▼文字装飾 */
   text-decoration: none;
   /* ▼背景 */
   background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ccc)); /* Chrome,Safari */
   filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#ffffffff,EndColorStr=#ffcccccc); zoom:1; /* IE */
   background: -moz-linear-gradient(top, #fff, #ccc); /* Firefox */
   background: -o-linear-gradient(top, #fff, #ccc);   /* Opera */
   background: linear-gradient(top, #fff, #ccc);      /* CSS3 */
   /* ▼行高 */
   line-height: 2em;
   /* ▼空白・改行の扱い */
   white-space: nowrap;
}
</style>