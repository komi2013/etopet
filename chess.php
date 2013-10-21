<html>
<head><title>chess</title></head>
<body>

<?php

$n = 3;

$place = array();

// $place[0] = array(1,1);
// $place[1] = array(1,3);
// $place[2] = array(2,1);
// $place[3] = array(2,3);
// $place[4] = array(3,1);
// $place[5] = array(3,2);
// $place[6] = array(3,3);

$block = array();
$block[0] = array(1,2); 
// $block[0][1] = 2;
$block[1] = array(2,2); 

while($n > 0){
  $m = 3;
  while($m > 0){
    
//     echo $n.','.$m.'<br>';
    $place[] = array($n,$m);
    
    --$m;
  }  
  --$n;  
}

// $block[1][1] = 2;

// define("NO_PASS", 0);
$cnt1 = 0;
$cnt = 0;
$dis_x = 0;
$dis_y = 0;
// $line = array(0,0,0,0);
$newline = false;
$no_pass = 0;
foreach($place as $d){
  ++$cnt1;
  $queens[0][0] = $d[0];
  $queens[0][1] = $d[1];

  check_line($place,$queens,$block);
  $no_pass += $no_pass;
}

// echo $no_pass;

function check_line($place,$queens,$block){
// echo '<pre>';
// var_dump($queens);
// echo '</pre>';
// echo ' ';
//   $no_pass = 0;
  foreach($place as $dd){
    $line_cnt = 0;
    $key_cnt = 0;
    foreach($queens as $key => $qp_d){
//       echo 'cnt<br>';
      $dis_x = $qp_d[0] - $dd[0];
      $dis_y = $qp_d[1] - $dd[1];
      if(){
      }else if($dis_x == 0){
        $blocked = chk_block_y($qp_d,$dd,$block);
        $blocked = 1;
       
        if($blocked == 1){
          ++$line_cnt;
        }
      }else if($dis_y == 0){
//         echo 'test';
//         $blocked = chk_block_x($qp_d,$dd,$block);
        $blocked = 1;
        if($blocked == 1){
          ++$line_cnt;
        }
      }else if($dis_x == $dis_y OR $dis_x == -$dis_y){
        ++$line_cnt;
      }else{

      }
      ++$key_cnt;
    }
    if($line_cnt == 0){
      $queens1 = $queens;
      $queens1[$key+1][0] = $dd[0];
      $queens1[$key+1][1] = $dd[1];
      $no_pass += 1/($key+2);
//       check_line($place,$queens1,$cnt1);
    }
  }
  echo $no_pass;
  echo '<br>';
}

function chk_block_y($p1,$p2,$block){
  if($p2[1] < $p1[1]){
    $y1 = $p2[1];
    $y2 = $p1[1];
  }
  else{
    $y1 = $p1[1];
    $y2 = $p2[1];
  }
  $blocked = 1;
  echo '('.$p1[0].' '.$p1[1].')';
  echo '('.$p2[0].' '.$p2[1].')';
  echo '<br>';
  foreach($block as $d){
//     echo $d[0].' == '.$p1[0].'<br>';
    if($d[0] == $p1[0]){
      while($y1 < $y2){
        if($y1 == $d[1]){
          ++$blocked;
        }
        ++$y1;
      }
      
    }
  }
  echo 'blocked y '.$blocked.'<br>';
  return $blocked;
}

function chk_block_x($p1,$p2,$block){
  if($p2[0] < $p1[0]){
    $x1 = $p2[0];
    $x2 = $p1[0];
  }
  else{
    $x1 = $p1[0];
    $x2 = $p2[0];
  }
  $blocked = 1;
  foreach($block as $d){
    if($d[1] == $p1[1]){
      while($x1 < $x2){
        if($x1 == $d[0]){
          ++$blocked;
        }
        ++$x1;
      }
      
    }
  }
  echo 'blocked x '.$blocked.'<br>';
  return $blocked;
//   if($blocked > 0){
//     echo 'blocked';
//     return 2;
//   }else{
// //     echo 'no blocked';
//     return 1;
//   }
}

?>

<form method="GET" action="">
  <input type="submit" value="send">
<textarea name="input"></textarea>
</form>

</body>
</html>