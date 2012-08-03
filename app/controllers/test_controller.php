<?php
class TestController extends AppController {
  var $name = 'Test';
  var $uses = array();
  //  var $helpers = array('Javascript');
  //  var $components = array('Auth','Openid');

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }

  public function index() {

  }
}
