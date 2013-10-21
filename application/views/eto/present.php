<div>

</div>

<table>
<?php foreach($present as $k => $d){ ?>
<tr><td rowspan="2"><img id="my_img" src="<?=$d->img;?>"></td><td>X <?=$d->amount;?> <?=substr($d->timestamp, 5, 11);?></td></tr>
<tr>                     <td><?=__($d->msg);?></td></tr>
<?php } ?>
</table>

<script type="text/javascript">


</script>

<style type="text/css">
#my_img{
 max-width:  64px;
 max-height: 64px;
}
</style>
