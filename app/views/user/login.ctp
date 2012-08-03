<div class="row">
  <div class="span6 offset3">
<?php if ($session->check("Message.auth")) { ?>
    <div class="error-message" style="text-align:center;"><?php echo $session->flash("auth"); ?></div>
<?php } ?>
    <?php echo $form->create('User', array('url'=>'/user/login', 'inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <table class="table table-bordered">
	  <tr>
		<td>ID</td>
        <td><?php echo $form->input('username',array('type'=>'text', 'size'=>'40')); ?>&nbsp;ID:rogm </td>
	  </tr>
	  <tr>
		<td>PASSWORD</td>
        <td><?php echo $form->input('password',array('type'=>'password', 'size'=>'40')); ?>&nbsp;Password:いつもの</td>
	  </tr>
	  <tr>
		<td colspan="2" style="text-align:center;"><button type="submit" class="btn">ログイン</button></td>
	  </tr>
    </table>
    <?php echo $form->end(); ?>
  </div>
</div>
