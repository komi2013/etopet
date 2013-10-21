<br>
<div>

<div>
  <img border="1" src="<?=$mt_level->img;?>" width="300" height="300">
</div>
<div><a href="eat"><?=__('eat');?></a></div>
<br>
<div>
  <a><?=__('level');?> <?=$pet->level;?></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a><?=__('food');?></a> <a><?=$status->food;?></a>
</div>
<br>
<a><?=__('experience');?></a>
<div class="outline">
  <button class="exp" style="width:<?=$status->exp / $mt_level->goal_exp * 300;?>px;"><?=$status->exp;?></button>
</div>
<br>
<a><?=__('energy');?></a>
<div class="outline">
  <button class="mpk" style="width:<?=$status->manpuku / $mt_level->max_mpk * 300;?>px;"><?=$status->manpuku;?></button>
</div>
<a class="warn"><?=ceil($status->manpuku / $mt_level->rate_hgry);?> <?=__('days later, pet will be starved');?></a><br>

<a href="<?=$goto_quiz;?>"><?=__('make quiz to get food');?></a>

</div>

<script type="text/javascript">


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
 width: 300px;
 border: 2px solid;
 border-color: black;
-- background-color: #99cc00;
}
</style>