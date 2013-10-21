<?php
$lang = Request::current()->param('lang');
$one = Request::current()->param('one');
$two = Request::current()->param('two');
i18n::lang($lang);
?>

<div>
<img border="1" src="/public/img/eat.gif" width="300" height="300">
</div>

<a href="/<?=$lang;?>/main/"><?=__('My Page');?></a>
