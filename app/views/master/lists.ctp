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
  <div class="span12">
    <blockquote>マスター一覧</blockquote>
    <ul class="nav nav-tabs">
      <li<?php if(!isset($this->params['named']['country'])){?> class="active"<?php }?>><a href="/master/lists/">すべて</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==1)){?> class="active"<?php }?>><a href="/master/lists/country:1/">ルーンミッドガッツ</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==3)){?> class="active"<?php }?>><a href="/master/lists/country:3/">シュバルツバルド</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==2)){?> class="active"<?php }?>><a href="/master/lists/country:2/">アルナベルツ</a></li>
    </ul>
	<?php echo $this->element('pagination');?>
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
        <td><a href="/alliance/detail/<?php echo $val['Alliance']['id'];?>"><?php echo $val['Alliance']['name'];?></a><br />
        <?php if(!isset($this->params['named']['country'])){?><span class="gray"><?php echo Configure::read("Country.{$val['Master']['country']}");?></span><?php } ?></td>
		<?php for($i=1;$i<6;$i++){?>
        <td>
			<?php if(isset($val['Master']['gm'.$i.'_job'])){?><img src="<?php echo Configure::read("Job.{$val['Master']['gm'.$i.'_job']}.icon");?>" width="35px" align="left" alt=""/><?php } ?>
			&nbsp;<?php echo Configure::read("Job.{$val['Master']['gm'.$i.'_job']}.name");?><br />
			<?php if($val['Master']['gm'.$i.'_lv']){?>&nbsp;Lv. <?php echo $val['Master']['gm'.$i.'_lv'];?><?php } ?>
		</td>
		<?php } ?>
		<td><a href="/master/edit/<?php echo $val['Master']['id'];?>">編集</a></td>
	  </tr>
      <?php } ?>
      </tbody>
    </table>
  </div><!-- .span12 -->
</div><!-- .row -->

