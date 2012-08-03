<?php
class SearchController extends AppController {
  var $name = 'Search';
  var $uses = array();

  function beforeFilter() {
	parent::beforeFilter();
  }

  function beforeRender() {
	parent::beforeRender();
  }
  public function lists() {
	if (!strlen($this->data['word'])) {
	  $this->redirect("/");
	}

	//	$param = array('conditions' => array('Master.freeword' => $this->data['word']),
	$param = array('conditions' => array('or' => array('Camp.name like' => '%'.$this->data['word'].'%',
													   'Master.gm1_name like' => '%'.$this->data['word'].'%',
													   'Master.gm2_name like' => '%'.$this->data['word'].'%',
													   'Master.gm3_name like' => '%'.$this->data['word'].'%',
													   'Master.gm4_name like' => '%'.$this->data['word'].'%',
													   'Master.gm5_name like' => '%'.$this->data['word'].'%',
													   )),
				   'group' => 'Camp.master_id',
				   'order' => 'Master.id asc',
				   );
	$list = $this->Camp->find('all',$param);
	$this->set("list",$list);
  }
}

