<?php
class TopController extends AppController {
  var $name = 'Top';
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
	$mas = array('conditions' => array('Master.status' => 1),
				 'order' => 'Master.updated desc',
				 'limit' => 5);
	$master = $this->Master->find('all',$mas);

	$cam = array('conditions' => array('Camp.status' => 1),
				 'order' => 'Camp.updated desc',
				 'limit' => 5);
	$camp = $this->Camp->find('all',$cam);

	$al = array('conditions' => array('Alliance.status' => 1),
				'order' => 'Alliance.updated desc',
				'limit' => 5);
	$alliance = $this->Alliance->find('all',$al);

	$official = self::_getOfficial();

	$this->set("master",$master);
	$this->set("camp",$camp);
	$this->set("alliance",$alliance);
	$this->set("official",$official);
  }
  public function icon() {
  }
  public function _getOfficial($force=false) {
	$cacheKey = 'official';
	Cache::set(array('duration' => '+5 minutes'));
	if (($force === true) || (($res = Cache::read($cacheKey)) === false)) {
	  $url = 'http://rogm.gungho.jp/index.rdf';
	  $xml = simplexml_load_file($url,'SimpleXMLElement', LIBXML_NOCDATA);
	  //	var_dump($xml->item);
	  //	print_r($xml->items);
	  $res = array();
	  foreach ($xml->item as $val) {
		$dc = $val->children('http://purl.org/dc/elements/1.1/');
		$res[] = array('date' => date('Y-m-d H:i',strtotime((string) $dc->date)),
					   'title' => (string) $val->title,
					   'link' => (string) $val->link,
					   );
		if (count($res) >4) break 1;
	  }
	  Cache::set(array('duration' => '+5 minutes'));
	  Cache::write($cacheKey, $res);
	}
	return $res;
  }
}

