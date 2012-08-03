<?php
class MapController extends AppController {
  var $name = 'Map';
  var $uses = array();
  //  var $helpers = array('Javascript');
  //  var $components = array('Auth','Openid');

  function beforeFilter() {
	parent::beforeFilter();
	//	$this->Auth->userScope = array('User.flag' => 0);
	//	$this->Auth->loginAction = '/login';
	//	$this->Auth->logoutAction = '/logout';
	//    $this->Auth->allow('index','login','logout');
  }

  function beforeRender() {
	parent::beforeRender();
	//	$user = $this->Auth->user();
	//	$this->set('auth', $user['User']['nickname']);
  }

  public function index() {
	$list = $this->Camp->getAll();
	$this->set("list", $list);
  }
  public function icon() {
  }
}

