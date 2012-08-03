<div class="row">
  <div class="span4">
    <blockquote>マスター詳細</blockquote>
    <table class="table table-bordered">
      <tr>
        <th>マスター名</th>
        <td><?php echo $data['Master']['name'];?></td>
      </tr>
      <tr>
        <th>同盟名</th>
        <td><?php echo $data['Alliance']['name'];?></td>
      </tr>
      <tr>
        <th>所属国</th>
        <td><?php echo Configure::read("Country.{$data['Master']['country']}");?></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align:center;"><a href="/master/edit/<?php echo $data['Master']['id'];?>"><button class="btn">編集</button></a></td>
      </tr>
    </table>
    <?php if(strlen($data['Master']['memo'])){?>
	<div class="well"><?php echo nl2br($data['Master']['memo']);?></div>
    <?php } ?>
  </div>

  <div class="span4">
    <blockquote>キャンプ</blockquote>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>キャンプ名</th>
        <th>座標</th>
        <th style="width:80px;">編集</th>
      </tr>
      </thead>
      <tbody>
	  <?php foreach ($camp as $key => $val) { ?>
      <tr>
        <td><?php echo $val['Camp']['name'];?></td>
        <td class="span1"><?php echo $val['Camp']['x'];?>,<?php echo $val['Camp']['y'];?></td>
		<td><a href="/camp/edit/<?php echo $val['Camp']['id'];?>"><button class="btn">編集</button></a></td>
      </tr>
	  <?php } ?>
      <tr>
        <td colspan="3" style="text-align:center;">
		<a href="/camp/edit/master_id:<?php echo $data['Master']['id'];?>/"><button class="btn">キャンプ追加</button></a>
		</td>
      </tr>
      </tbody>
    </table>
  </div><!-- //span4 -->

  <div class="span4">
    <blockquote>ギルドメンバー</blockquote>
    <table class="table table-bordered table-striped">
    <?php for($i=1;$i<6;$i++){?>
      <tr>
        <td class="spa"><?php if(isset($data['Master']['gm'.$i.'_job'])){?><img src="<?php echo Configure::read("Job.{$data['Master']['gm'.$i.'_job']}.icon");?>" align="left" alt=""/><?php } ?></td>
        <td class="spa"><?php echo Configure::read("Job.{$data['Master']['gm'.$i.'_job']}.name");?><br />
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
  </div>
</div>

<div class="row">
</div>

