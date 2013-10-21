<html>
<head><title>PHP TEST</title></head>
<body>

<?php
sleep(100);
echo $_SERVER["SERVER_NAME"]."</br>";


if ($_SERVER["SERVER_NAME"] == "usershome.enqueiz.ddo.jp")
{
	echo 'success';
}
else
{
	echo 'false';
}

?>
</body>
</html>