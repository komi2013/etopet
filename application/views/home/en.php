<?php 
$domain = new Model_Domain;
$client_id = $domain->client_id;
?>

<a href="https://www.facebook.com/dialog/oauth?<?=$client_id;?>redirect_uri=https://<?=$_SERVER['HTTP_HOST'];?>/en/in/fb/login/">facebook login</a>
<br>

<span><?=Cookie::get('err_msg');?></span>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42235700-1', 'komahana.info');
  ga('send', 'pageview');

</script>

<style type="text/css">

span {
 color:red;
}

</style>
