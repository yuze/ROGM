<div class="row">
  <div class="span10 offset1">
    <blockquote>戦闘レポート登録</blockquote>
    <div class="alert">
      戦闘レポートを入力してください。
    </div>
    <?php echo $form->create('Battle', array('url' => '/battle/edit','inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <?php echo $form->input('id',array('type'=>'hidden'));?>
    <table class="table table-bordered">
	  <tbody>
      <tr>
		<td>攻撃キャンプ&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('atk_master_id',array('type'=>'select','options'=>$masterList,'empty'=>'---','class'=>'atkMaster','error'=>false)); ?>
		<span class="atkCamp"></span><?php echo $form->error('atk_master_id');?></td>
	  </tr>
      <tr>
		<td>防衛キャンプ&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('def_master_id',array('type'=>'select','options'=>$masterList,'empty'=>'---','class'=>'defMaster','error'=>false)); ?>
		<span class="defCamp"></span><?php echo $form->error('def_master_id');?></td>
	  </tr>
      <tr>
		<td>最終攻撃力&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('atk',array('type'=>'text')); ?>&nbsp;ex) 310294</td>
	  </tr>
      <tr>
		<td>最終防御力&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('def',array('type'=>'text')); ?>&nbsp;ex) 269112</td>
	  </tr>
      <tr>
		<td>戦闘日付</td>
        <td><?php echo $form->input('battle_date',array('type'=>'datetime','dateFormat'=>'YMD','timeFormat'=>24,'monthNames'=>false,'class'=>'span2')); ?></td>
	  </tr>
      <tr>
		<td>メモ</td>
	    <td><?php echo $form->input('memo',array('type'=>'textarea','class'=>'span5')); ?></td>
	  </tr>
      <tr>
		<td colspan="2" style="text-align:center;"><?php echo $form->submit('登録');?>
		</td>
	  </tr>
	  </tbody>
    </table>
    <?php echo $form->end();?>
	<?php if(isset($this->data['Report']['id'])) {?>
	<blockquote>レポート削除する場合は削除ボタンを押してください</blockquote>
    <?php echo $form->create('Camp', array('url' => '/report/delete','inputDefaults'=>array('label'=>false,'div'=>false),'class'=>'delete')); ?>
      <?php echo $form->input('id',array('type'=>'hidden'));?>
      <?php echo $form->submit('レポート削除',array('class'=>'btn-danger'));?>
    <?php echo $form->end();?>
    <?php } ?>
  </div><!-- .span12 -->
</div><!-- .row -->

<script type="text/javascript">
$(function(){
  $(".atkMaster").change(function(){
	setAtkCamp($(this).val());
  });
  $(".defMaster").change(function(){
	setDefCamp($(this).val());
  });
  if($(".atkMaster").val()){
	setAtkCamp($(".atkMaster").val());
  }
  if($(".defMaster").val()){
	setDefCamp($(".defMaster").val());
  }
});
<?php $defaultAtk = isset($this->data['Battle']['atk_camp_id']) ? $this->data['Battle']['atk_camp_id'] : '';?>
<?php $defaultDef = isset($this->data['Battle']['def_camp_id']) ? $this->data['Battle']['def_camp_id'] : '';?>
function setAtkCamp(id) {
  $("span.atkCamp").load('/camp/data/'+id+'/Battle.atk_camp_id/<?php echo $defaultAtk;?>');
}
function setDefCamp(id) {
  $("span.defCamp").load('/camp/data/'+id+'/Battle.def_camp_id/<?php echo $defaultDef;?>');
}
</script>
