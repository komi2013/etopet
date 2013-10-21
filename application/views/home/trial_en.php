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

$domain = new Model_Domain;
$client_id = $domain->client_id;

?>
<a href="https://www.facebook.com/dialog/oauth?<?=$client_id;?>redirect_uri=https://<?=$_SERVER['HTTP_HOST'];?>/en/in/fb/login/">facebook login</a>
<br>
<div>
  <p>ETO pet</p>
  <p>feed pet, beat monster with team</p>
</div>
<img src="/public/game/stg1/touch.jpg"><br>
<a href="/en/game/touch">touch get food</a><br>
<br>
<img src="/public/game/puzzle/buzzle.jpg"><br>
<a href="/en/game/puzzle/">attck with puzzle</a><br>
<br>

<span><?=Cookie::get('err_msg');?></span>


<img src="/public/game/stg1/touch.jpg"><br>
<a href="https://etopet.komahana.info:8888/touch-stg.html?name=<?=$name;?>&img=<?=$img;?>">
real time multi player
</a><br>
<br>

<div style="display:none;">

<form method="POST" action="/en/in/tmpusr/register/">
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
