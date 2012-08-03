<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ROGM対ルーン戦線</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href='/css/bootstrap.css' rel='stylesheet' type='text/css' />
<link href='/css/bootstrap-responsive.css' rel='stylesheet' type='text/css' />
<link href='/css/custom.css?<?php echo time();?>' rel='stylesheet' type='text/css' />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/common.js?<?php echo time();?>" type="text/javascript"></script>

</head>
<body>
<div class="container">
<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
  <a class="brand" href="/">ROGM対ルーン戦線</a>
  <ul class="nav">
    <li class="<?php echo ($this->params['controller'] =='top') ? 'active':'';?>"><a href="/">Home</a></li>
    <li class="<?php echo ($this->params['controller'] =='map') ? ' active':'';?>"><a href="/map/">戦力分布</a></li>
    <li class="dropdown<?php echo ($this->params['controller'] =='master') ? ' active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Master<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/master/edit">マスター登録</a></li>
        <li><a href="/master/lists">マスター一覧</a></li>
      </ul>
    </li>
    <li class="dropdown<?php echo ($this->params['controller'] =='camp') ? ' active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Camp<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/camp/edit">キャンプ登録</a></li>
        <li><a href="/camp/lists">キャンプ一覧</a></li>
      </ul>
    </li>
    <li class="dropdown<?php echo ($this->params['controller'] =='alliance') ? ' active':'';?>">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alliance<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="/alliance/edit">同盟登録</a></li>
        <li><a href="/alliance/lists">同盟一覧</a></li>
      </ul>
    </li>
    <form class="navbar-search pull-left" action="/search/lists" method="post">
      <?php echo $form->input('word',array('type'=>'text','class'=>'search-query','placeholder'=>'Search','div'=>false,'label'=>false));?>
      <button type="submit" class="btn" style="margin:0;">Search</button>
    </form>
  </ul>
    </div><!-- //.container -->
  </div><!-- //.navbar-inner -->
</div><!-- //.navbar -->
<?php if ($session->check("Message.flash")) {?>
  <div class="alert alert-success">
  <?php echo $session->flash();?>
  </div>
<?php } ?>
  
<?php echo $content_for_layout;?>

<div class="footer">
  <div class="row">

  <div class="span3">Copyright rogm.net All rights reserved.</div>
  <div class="span2 offset6">Created by しゃる</div>
  </div>
</div>

</div><!-- //.container -->
<?php echo $this->element('sql_dump');?>
</body>
</html>
