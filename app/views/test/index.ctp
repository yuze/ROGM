<div class="row">
  <div class="span8 offset2">
    <blockquote>hoge</blockquote>
    <!--form action="https://ssl.agito.com.tw/game/api/game.xml" method="post"-->
    <!--form action="http://game.voxy.jp/api/game.xml" method="post"-->
    <form action="https://ssl.agito.com.tw/game/api/game.xml" method="post">
    <?php //echo $form->create('Test', array('url' => 'https://ssl.agito.com.tw/game/api/game.xml','inputDefaults'=>array('label'=>false,'div'=>false))); ?>
    <table class="table table-bordered">
	  <tbody>
      <tr>
		<td>sess&nbsp;<span class="label label-important">必須</span></td>
        <td><input type="text" name="session" value="" /></td>
	  </tr>
      <tr>
		<td>game_id&nbsp;<span class="label label-important">必須</span></td>
        <td><input type="text" name="game_id" value="" /></td>
	  </tr>
      <tr>
		<td>score&nbsp;<span class="label label-important">必須</span></td>
        <td><input type="text" name="score" value="" /></td>
	  </tr>
      <tr>
		<td>hash&nbsp;<span class="label label-important">必須</span></td>
        <td><input type="text" name="hash" value="" /></td>
	  </tr>
      <tr>
		<td colspan="2" style="text-align:center;"><?php echo $form->submit('登録');?>
		</td>
	  </tr>
	  </tbody>
    </table>
    <?php echo $form->end();?>
  </div><!-- .span12 -->
</div><!-- .row -->
