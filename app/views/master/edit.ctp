<style type="text/css">
td.gm {
  border-left:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>マスター登録</blockquote>
    <div class="alert">
      マスター情報を入力してください。
    </div>
    <?php echo $form->create('Master', array('url' => '/master/edit','inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <?php echo $form->input('id',array('type'=>'hidden'));?>
    <table class="table table-bordered">
	  <tbody>
      <tr>
		<td colspan="2">所属&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('country',array('type'=>'select','options'=>Configure::read("Country"))); ?></td>
	  </tr>
      <tr>
		<td colspan="2">マスター名&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td colspan="2">同盟</td>
        <td><?php echo $form->input('alliance_id',array('type'=>'select','options'=>$alList,'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td rowspan="6">GM1</td>
		<td class="gm">Name</td>
        <td><?php echo $form->input('gm1_name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Level</td>
        <td><?php echo $form->input('gm1_lv',array('type'=>'select','options'=>array_combine(range(0,20),range(0,20)),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Job</td>
        <td><?php echo $form->input('gm1_job',array('type'=>'select','options'=>Configure::read("JobList"),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル1</td>
        <td><?php echo $form->input('gm1_skill1',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル2</td>
        <td><?php echo $form->input('gm1_skill2',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル3</td>
        <td><?php echo $form->input('gm1_skill3',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td rowspan="6">GM2</td>
		<td class="gm">Name</td>
        <td><?php echo $form->input('gm2_name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Level</td>
        <td><?php echo $form->input('gm2_lv',array('type'=>'select','options'=>array_combine(range(0,20),range(0,20)),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Job</td>
        <td><?php echo $form->input('gm2_job',array('type'=>'select','options'=>Configure::read("JobList"),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル1</td>
        <td><?php echo $form->input('gm2_skill1',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル2</td>
        <td><?php echo $form->input('gm2_skill2',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル3</td>
        <td><?php echo $form->input('gm2_skill3',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td rowspan="6">GM3</td>
		<td class="gm">Name</td>
        <td><?php echo $form->input('gm3_name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Level</td>
        <td><?php echo $form->input('gm3_lv',array('type'=>'select','options'=>array_combine(range(0,20),range(0,20)),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Job</td>
        <td><?php echo $form->input('gm3_job',array('type'=>'select','options'=>Configure::read("JobList"),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル1</td>
        <td><?php echo $form->input('gm3_skill1',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル2</td>
        <td><?php echo $form->input('gm3_skill2',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル3</td>
        <td><?php echo $form->input('gm3_skill3',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td rowspan="6">GM4</td>
		<td class="gm">Name</td>
        <td><?php echo $form->input('gm4_name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Level</td>
        <td><?php echo $form->input('gm4_lv',array('type'=>'select','options'=>array_combine(range(0,20),range(0,20)),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Job</td>
        <td><?php echo $form->input('gm4_job',array('type'=>'select','options'=>Configure::read("JobList"),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル1</td>
        <td><?php echo $form->input('gm4_skill1',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル2</td>
        <td><?php echo $form->input('gm4_skill2',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル3</td>
        <td><?php echo $form->input('gm4_skill3',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td rowspan="6">GM5</td>
		<td class="gm">Name</td>
        <td><?php echo $form->input('gm5_name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Level</td>
        <td><?php echo $form->input('gm5_lv',array('type'=>'select','options'=>array_combine(range(0,20),range(0,20)),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">Job</td>
        <td><?php echo $form->input('gm5_job',array('type'=>'select','options'=>Configure::read("JobList"),'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル1</td>
        <td><?php echo $form->input('gm5_skill1',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル2</td>
        <td><?php echo $form->input('gm5_skill2',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td class="gm">スキル3</td>
        <td><?php echo $form->input('gm5_skill3',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td>メモ</td>
	    <td colspan="2"><?php echo $form->input('memo',array('type'=>'textarea','class'=>'span5')); ?></td>
	  </tr>
      <tr>
		<td colspan="3" style="text-align:center;"><?php echo $form->submit('登録');?></td>
	  </tr>
	  </tbody>
    </table>
    <?php echo $form->end();?>
	<?php if(isset($this->data['Master']['id'])) {?>
	<blockquote>削除する場合は削除ボタンを押してください</blockquote>
    <?php echo $form->create('Master', array('url' => '/master/delete','inputDefaults'=>array('label'=>false,'div'=>false),'class'=>'delete')); ?>
      <?php echo $form->input('id',array('type'=>'hidden'));?>
      <?php echo $form->submit('マスター削除',array('class'=>'btn-danger'));?>
    <?php echo $form->end();?>
    <?php } ?>
  </div><!-- .span12 -->
</div><!-- .row -->

