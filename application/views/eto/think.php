<?php
$lang = Request::current()->param('lang');
$one = Request::current()->param('one');
$two = Request::current()->param('two');
i18n::lang($lang);
//$team_id = ceil((2+1)/4);
//echo '1_'.$team_id;
?>

<img id="my_img" src="<?=Cookie::get('img');?>">
<a><?=HTML::chars(Cookie::get('name'));?></a><br>

<div class="a_button">
<a href="/<?=$lang;?>/main/eat/"><?=__('eat');?></a>
<a><?=__('buy');?></a>
</div>

<img id="my_img" src="/public/img/food.png">&nbsp;&nbsp;&nbsp;
<a><?=$status->food;?></a><br>
<img id="my_img" src="/public/img/bomb.png">&nbsp;&nbsp;&nbsp;
<a><?=$status->magic;?></a><br>

<?=__('HOW TO');?>
<br>
<img src="/public/stg1/use_bomb.jpg">
<br>

<style type="text/css">
#my_img{
 max-width:  64px;
 max-height: 64px;
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