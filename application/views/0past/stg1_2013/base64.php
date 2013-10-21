<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>mcrypt</title>
<meta name="Description" content="" />
<meta name="Keywords"  content="" />

</head>
<body>
test


<script src="/public/javascript/jquery-1.7.1.min.js"></script>

<script src="/public/game/mcrypt/mcrypt.js"></script>
<script src="/public/game/mcrypt/rijndael.js"></script>
<script src="/public/game/mcrypt/Serpent.js"></script>


<script type="text/javascript">
var text = 'komatsu';
// var hash = CryptoJS.HmacSHA256("komatsu", "key");
// var key = 'key';
// var pub = mcrypt.pub;
//  var ciphers={		//	block size,	key size
//   "rijndael-128"	:[	16,			32]
//  }
// 
var ciphers= [16,32];
var mcry = mcrypt.Crypt(true,'komatsu','rijndael-128', 'key', ciphers, 'nofb');
alert(mcry);
</script>

</body>
</html>
