<?php
$lang = Request::current()->param('lang');
//$url_data = Request::current()->param('one');
$url_data = Request::current()->param('one');
i18n::lang($lang);
?>


<table class="rank">
  <tr><th><?=__('rank');?></th><th><?=__('img');?></th><th><?=__('name');?></th><th><?=__('level');?></th></tr>
  <?php foreach ($status as $k => $d) { ++$k; ?>
    <tr><td><?=$k;?></td><td><img src="<?="https://".$_SERVER['HTTP_HOST'];?>/public/img/level/<?=$d->level;?>.jpg"></td><td><?=$d->name;?></td><td><?=$d->level;?></td></tr>
  <?php } ?> 
</table>

<br>
<?php if($msg != 'no food') { ?>
<table class="img_txt">
  <tr>
  <td><img src="<?="https://".$_SERVER['HTTP_HOST'];?>/public/img/level/1.jpg"></td>
  <td>
    <a id="link" href="<?="https://".$_SERVER['HTTP_HOST'].'/'.$lang.'/in/usrquiz/login/?data='.$url_data;?>"><?=__('go to game');?></a><br>
    <a id="res_txt"><a><?=__($msg);?></a>
  </td>
  </tr>
</table>

<?php } ?>


<script type="text/javascript">


</script>

<style type="text/css">

/*******
.img_txt {
 width: 140px;
 height: 70px;
 float: left;
 padding: 5px;
}
.img_txt img{
 max-width: 60px;
 max-height: 60px;
}
.img_txt #my_pic {
 text-align: center;
}
******/

</style>