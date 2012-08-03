<?php
class BattleController extends AppController {
  var $name = 'Battle';
  var $uses = array('Battle');

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }

  public function edit($id=null) {
	$param = array('conditions' => array('Camp.status' => 1),
				   'fields' => array('Camp.*','Master.name'),
				   'order' => 'Master.country asc,Master.id asc');
	if (isset($this->params['named']['master_id'])) {
	  $param['conditions']['Camp.master_id'] = $this->params['named']['master_id'];
	}
	$camp = $this->Camp->find('all',$param);
	//	print_r($camp);
	//    $campList = Set::combine($camp,'{n}.Camp.id','{n}.Camp.name,{n}.Master.name');
    $campList = array();
	foreach ($camp as $key => $val) {
	  $campList[$val['Camp']['id']] = $val['Camp']['name'].'('.$val['Camp']['x'].','.$val['Camp']['y'].') - '.$val['Master']['name'];
	}
    $this->set("campList",$campList);

	$p = array('conditions' => array('Master.status' => 1),
			   'fields' => array('Master.name,Master.id,Master.country'),
			   'order' => 'Master.country asc,Master.id asc');
	$master = $this->Master->find('all',$p);
	$masterList = Set::combine($master,'{n}.Master.id','{n}.Master.name');
    $this->set("masterList",$masterList);


	if (!empty($this->data)) {
	  $this->Battle->set($this->data['Battle']);
	  if ($this->Battle->validates()) {
		/*
		if ($atk = $this->Camp->findById($this->data['Battle']['atk_camp_id'])) {
		  $this->data['Battle']['atk_master_id'] = $atk['Camp']['master_id'];
		}
		if ($def = $this->Camp->findById($this->data['Battle']['def_camp_id'])){
		  $this->data['Battle']['def_master_id'] = $def['Camp']['master_id'];
		}
		*/
		if (!strlen($this->data['Battle']['id'])) {
		  $this->Battle->create();
		  $this->data['Battle']['status'] = 1;
		}
		if ($this->Battle->save($this->data['Battle'])) {
		  $this->Session->setFlash('登録しました');
		  $this->redirect("/battle/edit");
		}
	  }
	} elseif($id) {
	  if ($battle = $this->Battle->findById($id)) {
		$this->data = $battle;
	  } else {
		$this->redirect("/");
	  }
	}
  }
  public function lists($id=null) {
	$this->paginate = array('limit' => 30,
                            'order' => 'Battle.battle_date desc');
	$param = array('Battle.status' => 1);
	$list = $this->Paginate('Battle',$param);
	//	print_r($list);
	$this->set("list",$list);
  }
}
