<br>
<table>
  <tr>
    <th></th><th><?=__('name');?></th><th><?=__('day hours');?></th>
  </tr>

<?php foreach($rank as $k => $d) { ?>
  <tr>
    <td><img id="rank_img" src="<?=$d->img?:'/public/img/no_image.jpg';?>"></td>
    <td><a><?=HTML::chars($d->name);?></a></td>
    <td><a><?=substr($d->score, -7, 1).' '.substr($d->score, -6, 2).':'.substr($d->score, -4, 2).':'.substr($d->score, -2, 2);?></a></td>
  </tr>
<?php	} ?>

</table>
<br>

<a><?=__('my score');?></a>&nbsp;&nbsp;<a><?=Request::current()->param('two');?></a><br>

<style type="text/css">
#rank_img{
 max-width:  100px;
 max-height: 100px;
}
#fb_share{
 max-width:  40px;
 max-height: 20px;
 cursor: pointer;
}
</style>

<?php if(Cookie::get('beat')==1){ ?>

<br>
<a onclick='postToFeed(); return false;'><img id="fb_share" src="/public/img/fb-share.png"></a><br>
<p id='msg'></p>
<div id='fb-root'></div>
<script>

var monster_lv = '<?=Cookie::get("monster_lv");?>';
var my_https = 'https://'+'<?=$_SERVER["HTTP_HOST"];?>';
var monster_img = my_https+'<?=Cookie::get("monster_img");?>';

$.getScript("https://connect.facebook.net/en_US/all.js");

function postToFeed() {
  FB.init({appId: "478243252250047", status: true, cookie: true});
  var obj = {
    method: 'feed',
  //   redirect_uri: fb_redirect_uri,
    link: my_https+'/en/main/',
    picture: monster_img,
    name: 'ETO pet',
    description: 'level '+monster_lv+' monster was beaten'
  };
  function callback(response) {
//     document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
    if(response != null){
      alert('shared');
    }
  }
  FB.ui(obj, callback);
}

</script>

<?php Cookie::set('beat',0); } ?>


