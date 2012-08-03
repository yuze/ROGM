<style type="text/css">
td.gm,th.gm {
  border-left:1px solid #ccc;
  border-top:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>戦闘レポート</blockquote>
	<?php echo $this->element('pagination');?>
    <table class="table table-striped table-bordered">
  	  <thead>
        <tr>
          <th>戦闘日時</th>
          <th>攻撃キャンプ</th>
          <th>防衛キャンプ</th>
          <th>総攻撃力</th>
          <th>総防御力</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($list as $key => $val) { ?>
	  <tr>
        <td><a href="/battle/edit/<?php echo $val['Battle']['id'];?>"><?php echo $val['Battle']['battle_date'];?></a></td>
        <td><?php echo $val['AtkMaster']['name'];?></td>
        <td><?php echo $val['DefMaster']['name'];?></td>
        <td><?php echo $val['Battle']['atk'];?></td>
        <td><?php echo $val['Battle']['def'];?></td>
	  </tr>
      <?php } ?>
      </tbody>
    </table>
  </div><!-- .span12 -->
</div><!-- .row -->

