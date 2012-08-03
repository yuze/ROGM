<table class="table table-bordered">
  <tr>
	<th class="span2">キャンプ名</th>
	<td><?php echo $data['Camp']['name'];?></td>
  </tr>
  <tr>
	<th>マスター名</th>
	<td><?php echo $data['Master']['name'];?></td>
  </tr>
  <tr>
	<th>座標</th>
	<td><?php echo $data['Camp']['x'];?>,<?php echo $data['Camp']['y'];?></td>
  </tr>
</table>

<table class="table table-bordered">
  <tr>
	<th class="span2">最大攻撃力</th>
	<td><?php echo isset($battle['Battle']) ? number_format($battle['Battle']['atk']) : '';?></td>
  </tr>
</table>

<table class="table table-bordered table-striped">
  <?php for($i=1;$i<6;$i++){?>
  <tr>
    <td class="span1"><?php if(isset($data['Master']['gm'.$i.'_job'])){?><img src="<?php echo Configure::read("Job.{$data['Master']['gm'.$i.'_job']}.icon");?>" width="45px" align="left" alt=""/><?php } ?></td>
    <td class="span2"><?php echo Configure::read("Job.{$data['Master']['gm'.$i.'_job']}.name");?><br />
		<?php if($data['Master']['gm'.$i.'_lv']){?>Lv. <?php echo $data['Master']['gm'.$i.'_lv'];?><br /><?php } ?>
		<?php if($data['Master']['gm'.$i.'_name']){?>Name: <?php echo $data['Master']['gm'.$i.'_name'];?><?php } ?>
    </td>
	<td>
		<?php if($data['Master']['gm'.$i.'_skill1']){?><?php echo $data['Master']['gm'.$i.'_skill1'];?><br /><?php } ?>
		<?php if($data['Master']['gm'.$i.'_skill2']){?><?php echo $data['Master']['gm'.$i.'_skill2'];?><br /><?php } ?>
		<?php if($data['Master']['gm'.$i.'_skill3']){?><?php echo $data['Master']['gm'.$i.'_skill3'];?><br /><?php } ?>
	</td>
  </tr>
  <?php } ?>
</table>

