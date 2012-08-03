<?php
class CampController extends AppController {
  var $name = 'Camp';
  var $uses = array();

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }
  public function index() {
	$this->redirect("/camp/lists");
  }
  public function lists() {
	$this->paginate = array('limit' => 30,
                            'order' => 'Camp.master_id desc');

	$param = array('Camp.status' => 1);
	if (isset($this->params['named']['country'])) {
	  $param['Master.country'] = $this->params['named']['country'];
	}

	$list = $this->Paginate('Camp',$param);
	$this->set("list",$list);
  }

  public function edit($id=null) {
	$param = array('conditions' => array('Master.status' => 1),
				   'order' => 'Master.id asc',);
	$master = $this->Master->find('all',$param);
    $masterList = Set::combine($master,'{n}.Master.id','{n}.Master.name');
    $this->set("masterList",$masterList);

	if (!empty($this->data)) {
	  $this->Camp->set($this->data['Camp']);
	  if ($this->Camp->validates()) {
		if (!strlen($this->data['Camp']['id'])) {
		  $this->Camp->create();
		  $this->data['Camp']['status'] = 1;
		}
		if ($this->Camp->save($this->data['Camp'])) {
		  $this->Camp->getAll(true);
		  $this->Session->setFlash('登録しました');
		  $this->redirect("/camp/edit");
		}
	  }
	} elseif($id) {
	  $this->data = $this->Camp->findById($id);
	}

	if (isset($this->params['named']['master_id'])) {
	  $this->data['Camp']['master_id'] = $this->params['named']['master_id'];
	}

  }

  public function delete() {
	if (!empty($this->data)) {
	  $set = array('id' => $this->data['Camp']['id'],
				   'status' => 9);
	  if ($this->Camp->save($set)) {
		$this->Session->setFlash('削除しました');
		$this->redirect("/camp/lists");
	  } else {
		$this->Session->setFlash('エラーが発生しました');
		$this->redirect("/camp/lists");
	  }
	} else {
	  $this->redirect('/');
	}
  }

  public function data($masterID=null,$name=null,$default=null) {
	$this->layout = 'ajax';
	$param = array('conditions' => array('Camp.master_id' => $masterID,
										 'Camp.status' => 1),
				   'recursive' => -1);

	if ($camp = $this->Camp->find('all',$param)) {
	  $list = Set::combine($camp,'{n}.Camp.id','{n}.Camp.name');
	  $this->set("list",$list);
	  $this->set("name",$name);
	  $this->set("default",$default);
	}
  }

}
