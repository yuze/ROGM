<style type="text/css">
td.gm {
  border-left:1px solid #ccc;
}
</style>
<div class="row">
  <div class="span8 offset2">
    <blockquote>同盟一覧</blockquote>
    <ul class="nav nav-tabs">
      <li<?php if(!isset($this->params['named']['country'])){?> class="active"<?php }?>><a href="/alliance/lists/">すべて</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==1)){?> class="active"<?php }?>><a href="/alliance/lists/country:1/">ルーンミッドガッツ</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==3)){?> class="active"<?php }?>><a href="/alliance/lists/country:3/">シュバルツバルド</a></li>
      <li<?php if(isset($this->params['named']['country']) && ($this->params['named']['country']==2)){?> class="active"<?php }?>><a href="/alliance/lists/country:2/">アルナベルツ</a></li>
    </ul>

    <table class="table table-striped table-bordered">
  	  <thead>
        <tr>
          <th>同盟名</th>
          <th>同盟盟主</th>
          <th>所属国</th>
          <th>編集</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($list as $key => $val) { ?>
      <tr>
        <td><a href="/alliance/detail/<?php echo $val['Alliance']['id'];?>"><?php echo $val['Alliance']['name'];?></a></td>
        <td><?php echo $val['Master']['name'];?></td>
        <td><?php echo Configure::read("Country.{$val['Alliance']['country']}");?></td>
        <td><a href="/alliance/edit/<?php echo $val['Alliance']['id'];?>">編集</a></td>
	  </tr>
      <?php } ?>
      </tbody>
    </table>
  </div><!-- .span12 -->
</div><!-- .row -->

