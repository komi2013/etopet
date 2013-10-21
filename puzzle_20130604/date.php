<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <title>パズル</title>
<?php

// $this->status->manpuku - ((($this->uni_today - $this->uni_date) / 86400 )

$time = '2013-05-17 03:02:24';
echo date("Y-m-d H:i:s").'<br>';
// strtotime('today');
$uni_now = strtotime("now");
$uni_time = strtotime($time);

echo floor(($uni_now - $uni_time) /28800);






?>
    <body>
    </body>
</html>
