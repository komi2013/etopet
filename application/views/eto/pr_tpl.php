<div>
<p>----PR----</p>

<table class="img_txt">
<tr>
  <td>
    <a href="http://ab88bghbq86tfy496pqhsgs9fs.hop.clickbank.net/" target="_top">
      <img src="/public/img/pr/tc.jpg">
    </a>
  </td>
  <td class="text">Online Computer Training Courses Including Microsoft Office</td>
</tr>
<tr>
  <td>
    <a href="http://3c9aafugr2anat8ll2f5hjqndd.hop.clickbank.net/" target="_top">
      <img src="/public/img/pr/math.jpg">
    </a>
  </td>
  <td class="text">Making Math More Fun - Math Games Package</td>
</tr>
<tr>
  <td>
    <a href="http://8925enofnd7w4td8o4219ubybc.hop.clickbank.net/" target="_top">
      <img src="/public/img/pr/accent.jpg">
    </a>
  </td>
  <td class="text">Naturally Fluent English Language Program</td>
</tr>
<tr>
  <td>
    <a href="http://70d88ohapgar1rdnjjsceqeo44.hop.clickbank.net/" target="_top">
      <img src="/public/img/pr/laugh.jpg">
    </a>
  </td>
  <td class="text">That's Comedy! - The Net's #1 Joke Ebook</td>
</tr>
</table>


<?php foreach($promo as $k => $d) { ?>

<div class="box">
  <div class="img_txt" id="pr_pic">
    <a href="<?=$d->url;?>">
      <img src="<?=$d->img;?>">
    </a>
  </div>
  <div class="img_txt">
    <a><?=$d->txt;?></a>
  </div>
</div>

<?php } ?>

</div>
<style type="text/css">

.img_txt td{
 width: 141px;
 height: 141px;
 text-align: center;
 border-bottom: inset 1px black;
}
.img_txt img{
 max-width: 136px;
 max-height: 136px;
 border:2px solid #2DCCCC;
}
.img_txt .text{
 text-align: left;
}

</style>

