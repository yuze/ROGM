<div class="row">
  <div class="span2 offset1">
    <dl class="sidemenu">
      <dt><i class="icon-home"></i>&nbsp;<a href="/">HOME</a></dt>
      <dt><i class="icon-map-marker"></i>&nbsp;<a href="/map/">戦力分布</a></dt>

      <dt><i class="icon-user"></i>&nbsp;Master</dt>
      <dd>
        <ul class="unstyled">
          <li><i class="icon-edit"></i>&nbsp;<a href="/master/edit">マスター登録</a></li>
          <li><i class="icon-list"></i>&nbsp;<a href="/master/lists">マスター一覧</a></li>
        </ul>
	  </dd>
      <dt><i class="icon-star"></i>&nbsp;Camp</dt>
      <dd>
        <ul class="unstyled">
          <li><i class="icon-edit"></i>&nbsp;<a href="/camp/edit">キャンプ登録</a></li>
          <li><i class="icon-list"></i>&nbsp;<a href="/camp/lists">キャンプ一覧</a></li>
        </ul>
	  </dd>
      <dt><i class="icon-refresh"></i>&nbsp;Alliance</dt>
      <dd>
        <ul class="unstyled">
          <li><i class="icon-edit"></i>&nbsp;<a href="/alliance/edit">同盟登録</a></li>
          <li><i class="icon-list"></i>&nbsp;<a href="/alliance/lists">同盟一覧</a></li>
        </ul>
	  </dd>
      <dt><i class="icon-align-left"></i>&nbsp;Analytics（beta版）</dt>
      <dd>
        <ul class="unstyled">
          <li><i class="icon-edit"></i>&nbsp;<a href="/battle/edit">戦闘レポート登録</a></li>
          <li><i class="icon-list"></i>&nbsp;<a href="/battle/lists">戦闘レポート</a></li>
        </ul>
	  </dd>
    </dl>
  </div>
  <div class="span8">
    <h3>Information</h3>
    <div class="alert alert-info">上部の検索フォームに「キャラ名」or「キャンプ名」を入力すると、登録されているマスターが検索できます。例）「庭」「ヤミ」など</div>
    <h3>更新履歴</h3>
    <div class="title">マスター</div>
    <ul class="unstyled">
      <?php foreach ($master as $key => $val) { ?>
      <?php $state = ($val['Master']['updated'] == $val['Master']['created']) ? 'create':'update';?>
      <li><?php if($state=='create'){?><span class="label label-warning">create</span><?php }else{ ?><span class="label label-info">update</span><?php } ?>&nbsp;
		  <a href="/master/detail/<?php echo $val['Master']['id'];?>"><?php echo $val['Master']['name'];?></a> - <a href="/alliance/detail/<?php echo $val['Alliance']['id'];?>"><?php echo $val['Alliance']['name'];?></a>
		  が<?php echo ($state=='create') ? '登録':'更新';?>されました。<span class="gray" style="float:right">&nbsp;&nbsp;[ <?php echo $val['Master']['updated'];?> ]</span>
	  </li>
      <?php } ?>
    </ul>

    <div class="title">キャンプ</div>
    <ul class="unstyled">
      <?php foreach ($camp as $key => $val) { ?>
      <?php $state = ($val['Camp']['updated'] == $val['Camp']['created']) ? 'create':'update';?>
      <li><?php if($state=='create'){?><span class="label label-warning">create</span><?php }else{ ?><span class="label label-info">update</span><?php } ?>&nbsp;
		  <a href="/camp/edit/<?php echo $val['Camp']['id'];?>"><?php echo $val['Camp']['name'];?></a> - (<?php echo $val['Camp']['x'];?>,<?php echo $val['Camp']['y'];?>)
		  が<?php echo ($state=='create') ? '登録':'更新';?>されました。<span class="gray" style="float:right">&nbsp;&nbsp;[ <?php echo $val['Camp']['updated'];?> ]</span>
	  </li>
      <?php } ?>
    </ul>

    <div class="title">同盟</div>
    <ul class="unstyled">
      <?php foreach ($alliance as $key => $val) { ?>
      <?php $state = ($val['Alliance']['updated'] == $val['Alliance']['created']) ? 'create':'update';?>
      <li><?php if($state=='create'){?><span class="label label-warning">create</span><?php }else{ ?><span class="label label-info">update</span><?php } ?>&nbsp;
		  <a href="/alliance/detail/<?php echo $val['Alliance']['id'];?>"><?php echo $val['Alliance']['name'];?></a> 
		  が<?php echo ($state=='create') ? '登録':'更新';?>されました。<span class="gray" style="float:right">&nbsp;&nbsp;[ <?php echo $val['Alliance']['updated'];?> ]</span>
	  </li>
      <?php } ?>
    </ul>

    <div class="title">公式情報</div>
    <ul class="unstyled">
      <?php foreach ($official as $key => $val) { ?>
      <li><i class="icon-info-sign"></i>&nbsp;<a href="<?php echo $val['link'];?>"><?php echo $val['title'];?></a><span class="gray" style="float:right">&nbsp;&nbsp;[ <?php echo $val['date'];?> ]</span>
	  </li>
      <?php } ?>
    </ul>

  </div><!-- .span7 -->
</div><!-- .row -->

