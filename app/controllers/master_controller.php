<?php
class MasterController extends AppController {
  var $name = 'Master';
  var $uses = array();

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }
  public function index() {
	$this->redirect("/master/lists");
  }
  public function lists() {
	$this->paginate = array('limit' => 30,
                            'order' => 'Master.id desc');

	$param = array('conditions' => array('Master.status' => 1),
				   'order' => 'Master.id desc',
				   );
	$param = array('Master.status' => 1);

	if (isset($this->params['named']['country'])) {
	  //	  $param['conditions']['Master.country'] = $this->params['named']['country'];
	  $param['Master.country'] = $this->params['named']['country'];
	}
	//	$list = $this->Master->find('all',$param);
	//	$this->passedArgs = $param;
	$list = $this->Paginate('Master',$param);
	$this->set("list",$list);
  }
  public function edit($id=null) {
	$param = array('conditions' => array('Alliance.status' => 1),
				   'order' => 'Alliance.id asc',);
	$al = $this->Alliance->find('all',$param);
    $alList = Set::combine($al,'{n}.Alliance.id','{n}.Alliance.name');
    $this->set("alList",$alList);

	if (!empty($this->data)) {
	  $this->Master->set($this->data['Master']);
	  if ($this->Master->validates()) {
		if (!strlen($this->data['Master']['id'])) {
		  $this->Master->create();
		  $this->data['Master']['status'] = 1;
		}
		if ($this->Master->save($this->data['Master'])) {
		  $this->Session->setFlash('登録しました');
		  $this->redirect("/master/detail/".$this->Master->id);
		}
	  }
	} elseif($id) {
	  $this->data = $this->Master->findById($id);
	}
  }
  public function data($campId=null) {
	$this->layout = 'ajax';
	$data = $this->Camp->findById($campId);
	$this->set("data",$data);

	$prm = array('conditions' => array('Battle.atk_master_id' => $data['Master']['id'],
									   'Battle.status' => 1),
				 'order' => 'atk desc',
				 'limit' => 1,
				 );
	$battle = $this->Battle->find('first', $prm);
	$this->set("battle",$battle);

  }
  public function detail($id=null) {
	$data = $this->Master->findById($id);
	$param = array('conditions' => array('master_id'=>$id,
										 'status'=>1),
				   'recursive' => -1);
	$camp = $this->Camp->find('all',$param);

	$this->set("data",$data);
	$this->set("camp",$camp);
  }

  public function delete() {
	if (!empty($this->data)) {
	  $set = array('id' => $this->data['Master']['id'],
				   'status' => 9);
	  if ($this->Master->save($set)) {
		$this->Session->setFlash('削除しました');
		$this->redirect("/master/lists");
	  } else {
		$this->Session->setFlash('エラーが発生しました');
		$this->redirect("/master/lists");
	  }
	} else {
	  $this->redirect('/');
	}
  }

}

