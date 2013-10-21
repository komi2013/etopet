<br>
<table>
  <tr>
    <th></th><th><?=__('name');?></th><th><?=__('score');?></th>
  </tr>

<?php foreach($rank as $k => $d) { ?>
  <tr>
    <td><img src="<?=$d->img?:'/public/img/no_image.jpg';?>"></td>
    <td><a><?=HTML::chars($d->name);?></a></td>
    <td><a><?=HTML::chars($d->score);?></a></td>
  </tr>
<?php	} ?>

</table>
<br>

<a><?=__('your score');?></a><a><?=Request::current()->param('three');?></a><br>

