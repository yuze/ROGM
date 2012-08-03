<style type="text/css">
tr.dot {
  border-right:1px solid #eee;
  border-bottom:1px solid #eee;
}
table.map tr.dot td.blank {
  margin:0;
  padding:0;
  height:7px;
  width:7px;
  line-height:7px;
  border-left:1px solid #eee;
  border-top:1px solid #eee;
}
table.map a {display:block;width:100%;height:100%;}
table.map a:hover {background-color:#ffcccc;}
table.map a.country1 {
  background: #00EAEA;
}
table.map a.country2 {
  background: #FF8000;
}
table.map a.country3 {
  background: #9FD500;
}
table.map tr.mem td {
  border-rignt:0;
  font-size:7pt;
  vertical-align:top;
}
td.mem {
  border-rignt:0;
  font-size:7pt;
  vertical-align:top;
}
</style>
<table class="map">
  <tr>
	<td></td>
	<td class="mem" colspan="10">0</td>
	<td class="mem" colspan="10">10</td>
	<td class="mem" colspan="10">20</td>
	<td class="mem" colspan="10">30</td>
	<td class="mem" colspan="10">40</td>
	<td class="mem" colspan="10">50</td>
	<td class="mem" colspan="10">60</td>
	<td class="mem" colspan="8">70</td>
  </tr>
  <?php foreach (range(10,-77) as $i) {?>
  <tr class="dot">
    <?php foreach (range(0,77) as $k) {?>
	<?php if(($k==0) && preg_match("/^(10|0|-10|-20|-30|-40|-50|-60|-70)$/",$i)) {?>
    <td class="mem" rowspan="10"><?php echo $i;?></td>
	<?php }elseif(($k==0) && ($i==70)){ ?>
    <td class="mem" rowspan="8"><?php echo $i;?></td>
	<?php } ?>
    <?php $idx = $k.'.'.$i;?>
    <?php if(isset($list[$idx])) {?>
    <td class="blank"><a href="/master/detail/<?php echo $list[$idx]['master_id'];?>" class="country<?php echo $list[$idx]['country'];?> camp" id="<?php echo $list[$idx]['id'];?>"></a></td>
	<?php } else {?>
    <td class="blank"></td>
    <?php } ?>
    <?php }//foreach ?>
  </tr>
  <?php }?>
</table>

