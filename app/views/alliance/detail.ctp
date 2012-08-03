<style type="text/css">
td.gm,th.gm {
  border-left:1px solid #ccc;
  border-top:1px solid #ccc;
}
tr.bg1 {
  background:#ECFCFF;;
}
tr.bg3 {
  background:#FFFFE5;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote><?php echo $data['Alliance']['name'];?></blockquote>
    <table class="table table-bordered">
      <tr>
        <td>同盟名</td>
        <td><?php echo $data['Alliance']['name'];?></td>
      </tr>
      <tr>
        <td>同盟盟主</td>
        <td><?php echo $data['Master']['name'];?></td>
      </tr>
      <tr>
        <td>所属国</td>
        <td><?php echo Configure::read("Country.{$data['Alliance']['country']}");?></td>
      </tr>
    </table>
  </div>
</div>

<div class="row">
  <div class="span12">

    <blockquote>同盟員</blockquote>
    <table class="table table-bordered">
  	  <thead>
        <tr>
          <!--th>No</th-->
          <th>マスター名</th>
          <th>同盟</th>
          <th class="gm">GM1</th>
          <th class="gm">GM2</th>
          <th class="gm">GM3</th>
          <th class="gm">GM4</th>
          <th class="gm">GM5</th>
          <th>edit</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($list as $key => $val) { ?>
      <tr>
		<!--td><?php echo $val['Master']['id'];?></td-->
        <td><a href="/master/detail/<?php echo $val['Master']['id'];?>"><?php echo $val['Master']['name'];?></a></td>
        <td><?php echo $val['Alliance']['name'];?><br />
        <?php if(!isset($this->params['named']['country'])){?><span class="gray"><?php echo Configure::read("Country.{$val['Master']['country']}");?></span><?php } ?></td>
		<?php for($i=1;$i<6;$i++){?>
        <td>
			<?php if(isset($val['Master']['gm'.$i.'_job'])){?><img src="<?php echo Configure::read("Job.{$val['Master']['gm'.$i.'_job']}.icon");?>" width="45px" align="left" alt=""/><?php } ?>
			<?php echo Configure::read("Job.{$val['Master']['gm'.$i.'_job']}.name");?><br />
			<?php if($val['Master']['gm'.$i.'_lv']){?>Lv. <?php echo $val['Master']['gm'.$i.'_lv'];?><?php } ?>
		</td>
		<?php } ?>
		<td><a href="/master/edit/<?php echo $val['Master']['id'];?>">編集</a></td>
	  </tr>
      <?php } ?>
      </tbody>
    </table>
    <?php echo $form->end();?>
  </div><!-- .span12 -->
</div><!-- .row -->

