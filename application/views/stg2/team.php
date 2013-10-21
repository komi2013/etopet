<br>
<table>

<?php foreach($team as $k => $d) {
    foreach($team_usr as $kk => $dd) {
//       echo Debug::vars($dd['id']); 
      if($d->u_id == $dd['id']){
        $img = $dd['img']; 
      } 
    } ?>

  <tr>
    <td rowspan="2"><img id="rank_img" src="<?=$img?:'/public/img/no_image.jpg';?>"></td>
    <td><?=$d->damage;?></td>
  </tr>

  <tr>
    <?php if($d->u_id == $usr->id){?>
      <td>
        <input type="text" value="<?=HTML::chars($d->msg);?>"><br>
        <button>送信</button>
        <span class="success">送信しました<br></span>
        <span class="fail"><br></span>
      </td>
    <?php }else{ ?>
      <td><?=HTML::chars($d->msg);?></td>

    <?php	} ?>
  </tr>
<?php	} ?>

</table>
<br>
<script type="text/javascript">

var post_url = '/ja/in/team/msg/';
$('button').click(function() {
  var param = {
    msg  : $('input').val()
  };
  var cli = this;
	$.ajax({type:'POST',dataType:'json',url:post_url,data:param})
  .always(function(data){
    if(data['chk'] == 1){
      $(cli).siblings('.success').fadeIn(10); 
      $(cli).siblings('.success').fadeOut(1000);
      $(cli).parent("td").css( 'background-color','#e0ffff')
    } else {
      $(cli).siblings(".fail").text(data['fail'])
    }
  });
});

</script>

<style type="text/css">
#rank_img{
 max-width:  64px;
 max-height: 64px;
}
.success{
 display: none;
}
</style>


