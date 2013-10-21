
<table>
<tr>
  <td rowspan="2"><img id="msg_img" src="<?=$mt_monster_lv->img;?>"></td>
  <td><?=$mt_monster_lv->name;?></td>
</tr>
<tr><td><?=__('level');?> <?=$mt_monster_lv->defence;?></td></tr>
</table>

<div class="outline"><button class="hp" style="width:<?=$monster_hp / $mt_monster_lv->hp * 240;?>px;"><?=$monster_hp;?></button></div>
<div class="a_button"><a href="/<?=$lang;?>/main/fight/"><?=__('fight');?></a></div>

<input type="text" value="" id="msg"> <input value="<?=__('message');?>" type="submit">

<table>

  <tr>
    <td id="myname"></td>
    <td rowspan="2" id="mymsg"></td>
  </tr>
  <tr>
    <td id="myimg"></td>
  </tr>
  <tr><td colspan="2" id="line"></td></tr>

<?php foreach($arr_team_msg as $k => $d) { ?>
  <tr>
    <td><?=HTML::chars($d['name']);?></td>
    <td rowspan="2"><?=HTML::chars($d['msg']);?></td>
  </tr>
  <tr>
    <td><img id="msg_img" src="<?=HTML::chars($d['img']) ?: $mt_monster_lv->img;?>"></td>
  </tr>
  <tr><td colspan="2">-------------------------------</td></tr>
<?php	} ?>

</table>
<br>

<style type="text/css">
#msg_img{
 max-width:  70px;
 max-height: 70px;
}
.outline{
 width: 240px;
 border: 2px solid;
 border-color: black;
}
.hp{
 background-color: #99cc00;
}
.a_button a {
  font-size: 1.2em;
   /* ▼枠線 */
   border-style: solid;
   border-width: 1px;
   border-color: #ccc #999 #999 #ccc;
   /* ▼角丸 */
   -webkit-border-radius: 7px; /* Chrome,Safari */
   -moz-border-radius: 7px;    /* Firefox */
   border-radius: 7px;         /* CSS3 */
   /* ▼余白 */
   padding: 0.3em 0.9em;
--margin: 0px 0.3em;
   /* ▼文字装飾 */
   text-decoration: none;
   /* ▼背景 */
   background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ccc)); /* Chrome,Safari */
   filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#ffffffff,EndColorStr=#ffcccccc); zoom:1; /* IE */
   background: -moz-linear-gradient(top, #fff, #ccc); /* Firefox */
   background: -o-linear-gradient(top, #fff, #ccc);   /* Opera */
   background: linear-gradient(top, #fff, #ccc);      /* CSS3 */
   /* ▼行高 */
   line-height: 2em;
   /* ▼空白・改行の扱い */
   white-space: nowrap;
}
input[type="submit"] {
   border-style: solid;
   border-width: 1px;
   border-color: #ccc #999 #999 #ccc;
   -webkit-border-radius: 7px; /* Chrome,Safari */
   -moz-border-radius: 7px;    /* Firefox */
   border-radius: 7px;         /* CSS3 */
   padding: 0.3em 0.9em;
   text-decoration: none;
   background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ccc)); /* Chrome,Safari */
   filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=0,StartColorStr=#ffffffff,EndColorStr=#ffcccccc); zoom:1; /* IE */
   background: -moz-linear-gradient(top, #fff, #ccc); /* Firefox */
   background: -o-linear-gradient(top, #fff, #ccc);   /* Opera */
   background: linear-gradient(top, #fff, #ccc);      /* CSS3 */
   line-height: 2em;
   white-space: nowrap;
}
</style>

<script>

var myname = '<?=HTML::chars(Cookie::get("name"));?>';
var myimg = '<?=HTML::chars(Cookie::get("img"));?>';
var post_q_txt = '/<?=$lang;?>/in/team/msg/';
//console.log(myname);
$('input[type=submit]').click(function() {
  var param = {
    msg  : $('#msg').val()
  };
//   var cli = this;
	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param})
  .always(function(data){
    if(data['chk'] == 1){
      $('#myname').append(myname);
      $('#mymsg').append($('#msg').val());
      $('#myimg').append('<img src="'+myimg+'">');
//       $('#myimg').attr("src",myimg);
      $('#line').append('-------------------------------');
    }else{
//       $('#mymsg').append();
      alert(data['message']);
    }
  });
});

</script>


