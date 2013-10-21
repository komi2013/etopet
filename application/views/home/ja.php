<?php
$domain = new Model_Domain;
$client_id = $domain->client_id;
?>

<a href="https://www.facebook.com/dialog/oauth?<?=$client_id;?>redirect_uri=https://<?=$_SERVER['HTTP_HOST'];?>/en/in/fb/login/">facebook login</a>
<br>
<div>
  <p>干支ペット</p>
  <p>ペットを育ててチームでモンスターを育てよう</p>
</div>
<img src="/public/game/stg1/touch.jpg"><br>
<a href="/ja/game/touch">タッチしてゲット</a><br>
<br>
<img src="/public/game/puzzle/buzzle.jpg"><br>
<a href="/ja/game/puzzle/">パズルで攻撃</a><br>
<br>

<span><?=Cookie::get('err_msg');?></span>

<div style="display:none;">

<?php 
$enqu_id = Request::current()->param('one');

if(Cookie::get('name')){
  $name = Cookie::get('name');
}else{
  $name = 'no name';
}

if(Cookie::get('img')){
  $img = Cookie::get('img');
}else{
  $img = 'https://'.$_SERVER['HTTP_HOST'].'/public/img/no_image.jpg';
}
?>


<img src="/public/game/stg1/touch.jpg"><br>
<a href="https://etopet.komahana.info:8888/touch-stg.html?name=<?=$name;?>&img=<?=$img;?>">
3人同時プレイ
</a><br>
<br>


<form method="POST" action="/ja/in/tmpusr/register/">
  <input type="submit" value="send">
  <input type="text" name="name">
</form>

</div>



<script type="text/javascript">

</script>

<style type="text/css">

span {
 color:red;
}

</style>
