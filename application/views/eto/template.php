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
    <link rel="icon" type="image/jpg" href="/public/stg1/fav_2.jpg">
    <script src="/public/javascript/jquery-1.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="aZvUIneCOx0fLUIUkJ5ZoTJYlGD36XsEtUeihMJFdFM" />
<style type="text/css">
body {
 width:640px;
-- margin: 0 auto;
}

#content {
 float: left;
 width: 320px;
}

@media screen and (max-width: 480px) {
   /* 480px以下の場合 */
  body {
   width:320px;
--   margin: 0 auto;
  }
  
  #content {
--   float: left;
   width: 320px;
  }
}

</style>

	</head>
	<body>

<?=$content; ?>

<br>

<a href="/<?=$lang;?>/home/"><?=__('top');?></a> &nbsp;
<a href="/<?=$lang;?>/main/"><?=__('my page');?></a>

	</body>
</html>

<script>

</script>