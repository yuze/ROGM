<style type="text/css">
td.gm {
  border-left:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>キャンプ登録</blockquote>
    <div class="alert">
      キャンプ情報を入力してください。
    </div>
    <?php echo $form->create('Camp', array('url' => '/camp/edit','inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <?php echo $form->input('id',array('type'=>'hidden'));?>
    <table class="table table-bordered">
	  <tbody>
      <tr>
		<td>マスター&nbsp;<span class="label label-important">必須</span></td>
        <td><?php echo $form->input('master_id',array('type'=>'select','options'=>$masterList,'empty'=>'---')); ?></td>
	  </tr>
      <tr>
		<td>キャンプ名&nbsp;<span class="label label-important">必須</span></td>
	    <td><?php echo $form->input('name',array('type'=>'text')); ?></td>
	  </tr>
      <tr>
		<td>座標</td>
        <td>X:&nbsp;<?php echo $form->input('x',array('type'=>'select','options'=>array_combine(range(0,77),range(0,77)),'empty'=>'---')); ?>
			Y:&nbsp;<?php echo $form->input('y',array('type'=>'select','options'=>array_combine(range(10,-77),range(10,-77)),'empty'=>'---')); ?></td>
	  </tr>
      <!--tr>
		<td>メモ</td>
	    <td><?php echo $form->input('memo',array('type'=>'textarea','class'=>'span5')); ?></td>
	  </tr-->
      <tr>
		<td colspan="2" style="text-align:center;"><?php echo $form->submit('登録');?>
		</td>
	  </tr>
	  </tbody>
    </table>
    <?php echo $form->end();?>
	<?php if(isset($this->data['Camp']['id'])) {?>
	<blockquote>キャンプ削除する場合は削除ボタンを押してください</blockquote>
    <?php echo $form->create('Camp', array('url' => '/camp/delete','inputDefaults'=>array('label'=>false,'div'=>false),'class'=>'delete')); ?>
      <?php echo $form->input('id',array('type'=>'hidden'));?>
      <?php echo $form->submit('キャンプ削除',array('class'=>'btn-danger'));?>
    <?php echo $form->end();?>
    <?php } ?>
  </div><!-- .span12 -->
</div><!-- .row -->
