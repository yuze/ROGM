<?php
class AllianceController extends AppController {
  var $name = 'Alliance';
  var $uses = array();

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }
  public function index() {
	$this->redirect("/alliance/lists");
  }
  public function lists() {
	$param = array('conditions' => array('Alliance.status' => 1),
				   'order' => 'Alliance.id desc',
				   );
	if (isset($this->params['named']['country'])) {
	  $param['conditions']['Alliance.country'] = $this->params['named']['country'];
	}
	$list = $this->Alliance->find('all',$param);
	$this->set("list",$list);
  }

  public function edit($id=null) {
	$param = array('conditions' => array('Master.status' => 1),
				   'order' => 'Master.id asc',);
	$master = $this->Master->find('all',$param);
    $masterList = Set::combine($master,'{n}.Master.id','{n}.Master.name');
    $this->set("masterList",$masterList);

	if (!empty($this->data)) {
	  if (!$this->data['Alliance']['master_id']) {
		unset($this->data['Alliance']['master_id']);
	  }
	  $this->Alliance->set($this->data['Alliance']);
	  if ($this->Alliance->validates()) {
		if (!strlen($this->data['Alliance']['id'])) {
		  $this->Alliance->create();
		  $this->data['Alliance']['status'] = 1;
		}
		if ($this->Alliance->save($this->data['Alliance'])) {
		  $this->Session->setFlash('登録しました');
		  $this->redirect("/alliance/edit");
		}
	  }
	} elseif($id) {
	  $this->data = $this->Alliance->findById($id);
	}
  }

  public function detail($id=null) {
	if (!$data = $this->Alliance->findById($id)) {
	  $this->redirect("/alliance/");
	}
	$param = array('conditions' => array('Master.alliance_id' => $id,
										 'Master.status' => 1),
				   );
	$list = $this->Master->find('all',$param);

	$this->set("data",$data);
	$this->set("list",$list);
  }
}
