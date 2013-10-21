<html>
<head><title>cards shuffle</title></head>
<body>

<?php

// $before = Array('A','B','C','D','E','F');

if($_GET){

// $line = split("\n" , $_GET['input']);
$line = preg_split("/\n/", $_GET['input']);

// echo '<pre>';
// var_dump($line);
// echo '</pre>';

foreach($line as $d){
  $space[] = preg_split('/ /', $d);
}
// echo '<pre>';
// var_dump($space);
// echo '</pre>';

foreach($space as $space_k => $ddd){
// echo $space_k.'<br>';
if($space_k >0){

$after = Array();

$n = $space[$space_k][0];
$k = $space[$space_k][1];

if($space_k > 10000 OR 2 > $k OR $k > $n OR $n > 100000000 ){
 die('error');  
}

// $before = Array(1,2,3,4,5,6);
$before = Array();

$n_i = 0;
while($n > $n_i){
  ++$n_i;
  $before[] = $n_i;
}

$shuffle = Array();
// $number
// while ()

$yama_i = $n / $k;
$number = 0;
$cards = $before;
while($before != $after AND $number < 10){

  $shuffle = Array();
  foreach($cards as $key => $d) { ++$key;
  
    $shuffle[ceil($key / $yama_i)][] = $d;
  }
  
//   echo Debug::vars($shuffle);
  $i = 0;
  $jj = -1;
//   $after = Array();
  $a_i = 0;
  foreach($cards as $a_i => $d) { ++$key;
    $ii = $k - (($a_i % $k));
    
    if($a_i % $k == 0)
    {
  //     $jj = ($i % $yama_i);
      $jj++;
    }
//     echo $shuffle[$ii][$jj];
    $after[$a_i] = $shuffle[$ii][$jj];
//     echo $ii.','.$jj.'<br>';
     
  }
  ++$number;
  ++$a_i;
  $cards = $after;
//   var_dump($cards);
}// while($before != $after AND $number < 100000000)
  echo $number.'<br>';
}//if($space_k > 0)
}//foreach($space as $space_k => $d){
}//if($_GET)

?>

<form method="GET" action="">
  <input type="submit" value="send">
<textarea name="input"></textarea>
</form>

</body>
</html>