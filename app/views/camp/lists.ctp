<style type="text/css">
td.gm,th.gm {
  border-left:1px solid #ccc;
  border-top:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>キャンプ一覧</blockquote>
    <ul class="nav nav-tabs">
      <li<?php if(!isset($this->params['named']['country'])){?> class="active"<?php }?>><a href="/camp/lists/">すべて</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==1)){?> class="active"<?php }?>><a href="/camp/lists/country:1/">ルーンミッドガッツ</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==3)){?> class="active"<?php }?>><a href="/camp/lists/country:3/">シュバルツバルド</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==2)){?> class="active"<?php }?>><a href="/camp/lists/country:2/">アルナベルツ</a></li>
    </ul>
	<?php echo $this->element('pagination');?>
    <table class="table table-striped table-bordered">
  	  <thead>
        <tr>
          <th>マスター名</th>
          <th>座標</th>
          <th>キャンプ名</th>
          <th>編集</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($list as $key => $val) { ?>
	  <tr>
        <td><a href="/master/detail/<?php echo $val['Master']['id'];?>"><?php echo $val['Master']['name'];?></a></td>
        <td><?php echo $val['Camp']['x'];?>,<?php echo $val['Camp']['y'];?></td>
        <td><?php echo $val['Camp']['name'];?></td>
        <td><a href="/camp/edit/<?php echo $val['Camp']['id'];?>">編集</a></td>
	  </tr>
      <?php } ?>
      </tbody>
    </table>
  </div><!-- .span12 -->
</div><!-- .row -->

