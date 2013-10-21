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
    <link rel="icon" type="image/jpg" href="/public/stg1/fav_1.jpg">
    <meta name="viewport" content="width=device-width">    
	</head>
	<body>
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
   margin: 0 auto;
  }
  
  #content {
   width: 320px;
  }
}
</style>

<?=$content;?>

	</body>
</html>

