<?php

// $before = Array('A','B','C','D','E','F');
// echo Debug::vars();
var_dump($_GET);
if($_GET){
$after = Array();

$n = 5;
$k = 5;

// $before = Array(1,2,3,4,5,6);
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
  echo Debug::vars($cards);
  echo $number;
}
}

?>

<form method="GET" action="">
  <input type="submit" value="send">
<textarea>
tesku
</textarea>
</form>
    
    <div id='fb-root'></div>
    
    <script src='http://connect.facebook.net/en_US/all.js'></script>
    <p><a onclick='postToFeed(); return false;'>Post to Feed</a></p>
    <p id='msg'></p>

<script src="/public/javascript/jquery-1.7.1.min.js"></script>

<script type="text/javascript">

// FB.init({appId: "YOUR_APP_ID", status: true, cookie: true});
// 
// function postToFeed() {
// 
//   // calling the API ...
//   var obj = {
//     method: 'feed',
//     redirect_uri: 'YOUR URL HERE',
//     link: 'https://developers.facebook.com/docs/reference/dialogs/',
//     picture: 'http://fbrell.com/f8.jpg',
//     name: 'Facebook Dialogs',
//     caption: 'Reference Documentation',
//     description: 'Using Dialogs to interact with people.'
//   };
// 
//   function callback(response) {
//     document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
//   }
// 
//   FB.ui(obj, callback);
// }



</script>

<style type="text/css">

</style>
