<?php
$lang = Request::current()->param('lang');
$one = Request::current()->param('one');
$two = Request::current()->param('two');
i18n::lang($lang);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?=__($page_title);?></title>
    <script src="/public/javascript/jquery-1.7.1.min.js"></script>
    <script src="/public/jquery.alerts-1.1/jquery.alerts.js"></script>
    <link rel='stylesheet' type='text/css' href='/public/jquery.alerts-1.1/jquery.alerts.css'>
    <meta name="viewport" content="width=device-width">
<style type="text/css">
body {
 width:640px;
 margin: 0 auto;
}

#content {
 float: left;
 width: 320px;
}
#pr_tpl {
 float: left;
 width:300px;
 padding: 10px;
-- height: 140px;
}
@media screen and (max-width: 480px) {
   /* 480px以下の場合 */
  body {
   width:320px;
   margin: 0 auto;
  }
  
  #content {
--   float: left;
   width: 320px;
  }
  #pr_tpl {
--   float: left;
   width:300px;
   padding: 10px;
  -- height: 140px;
  }
}
</style>

	</head>
	<body>
<div>

<?php $domain = new Model_domain ;?>

<?php if(Session::instance()->get('pv_u_id')) { ?>
  <a href="/<?=$lang;?>/in/usr/logout/"><?=__('logout');?></a>
<?php }else{ ?>
  <a href="<?=$domain->users.$lang;?>/users/login/8/ "><?=__('login');?></a>
<?php } ?>
&nbsp;
  <select class="lang_opt">
    <option value="en" <?= ($lang == 'en')? 'selected': '';?>>English</option>
    <option value="ja" <?= ($lang == 'ja')? 'selected': '';?>>日本語</option>
    <option value="ko" <?= ($lang == 'ko')? 'selected': '';?>>한국어</option>
    <option value="ar" <?= ($lang == 'ar')? 'selected': '';?>>العربية</option>
    <option value="zh" <?= ($lang == 'zh')? 'selected': '';?>>中文</option>
    <option value="es" <?= ($lang == 'es')? 'selected': '';?>>español</option>
  </select>
  &nbsp;
  <a href="<?=$domain->users.$lang;?>/contact/"><?=__('contact us');?></a>
  &nbsp;
  Komahana©2013
</div>

<canvas id='world'></canvas>

<script src="/public/game/stg1/enchant-0.4.0.js"></script>

<script src="/public/game/stg1/nineleap.js"></script>

<script src="/public/javascript/jquery-1.7.1.min.js"></script>

<script type="text/javascript">

// var limit_time = <?='10';?>;
// it must be chara_1 < chara_2 < chara_3 
var chara_1 = 0;
var chara_2 = 0;
var chara_3 = 0;
var hash_key = '<?="key";?>';


</script>

<script type="text/javascript" src="/public/game/stg1/index1.js"></script>

<div id="pr_tpl"> <?=$pr_tpl;?> </div>

	</body>
</html>

<script>

$(".lang_opt").change(function () {
  var language = "";
  var uri = '<?=substr_replace($_SERVER['REQUEST_URI'], '', 0,3);?>';
  $("select option:selected").each(function () {
    language = $(this).val();
  });
  window.location.replace('/' + language + uri)
})
</script>