<?php
class UserController extends AppController {
  var $name = 'User';

  function beforeFilter(){
	parent::beforeFilter();
	//	$this->Security->allowedActions = array("confirm");
  }

  function beforeRender(){
	parent::beforeRender();
  }

  public function index() {

  }
  public function login() {
	if ($this->Auth->user()) $this->redirect("/");
  }
  public function logout() {
	$this->redirect($this->Auth->logout());
  }
}
