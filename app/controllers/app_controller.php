<?php
class AppController extends Controller {
  var $uses = array('User','Alliance','Master','Camp','Battle');
  var $components = array('Auth','Session');

  function beforeFilter() {
    $this->Auth->userScope = array('User.status' => 1);
    $this->Auth->loginAction = '/user/login';
	//	$this->Auth->fields = array('username' => 'email', 'password' => 'password');
    $this->Auth->loginError = 'IDまたはパスワードが間違っています';
    $this->Auth->authorize = 'controller';
    $this->Auth->flashElement = null;
	$this->Auth->authError = 'ID、パスワードを入力してください';
  }
  function beforeRender() {
  }
  function isAuthorized () {
    $set = array('id' => $this->Auth->user('id'),
                 'last_login' => date('Y-m-d H:i:s'));
    $this->User->save($set);
    return true;
  }
}
