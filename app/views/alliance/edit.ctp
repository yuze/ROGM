<style type="text/css">
td.gm {
  border-left:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>同盟登録</blockquote>
    <div class="alert">
      同盟情報を入力してください。
    </div>
    <?php echo $form->create('Alliance', array('url' => '/alliance/edit','inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <?php echo $form->input('id',array('type'=>'hidden'));?>
    <table class="table table-bordered">
	  <tbody>
      <tr>
		<td>所属国&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('country',array('type'=>'select','options'=>Configure::read("Country"),'empty'=>'所属国を選択してください')); ?></td>
	  </tr>
      <tr>
		<td>同盟名&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td>同盟盟主</td>
        <td><?php echo $form->input('master_id',array('type'=>'select','options'=>$masterList,'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td colspan="2" style="text-align:center;"><?php echo $form->submit('登録');?></td>
	  </tr>
	  </tbody>
    </table>
    <?php echo $form->end();?>
  </div><!-- .span12 -->
</div><!-- .row -->

