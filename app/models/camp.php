<?php
class Camp extends AppModel {
	var $name = 'Camp';
	var $useTable = 'camp';
	var $displayField = 'name';
	var $validate = array(
		'x' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'y' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'キャンプ名を入力してください',
			),
		),
	);

	var $belongsTo = array(
		'Master' => array(
			'className' => 'Master',
			'foreignKey' => 'master_id',
			'conditions' => '',
			//			'fields' => 'name',
			'order' => ''
		)
	);
	public function getAll($force=false) {
	  $cacheKey = 'allCamp';
	  Cache::set(array('duration' => '+24 hours'));
	  if (($force === true) || (($res = Cache::read($cacheKey)) === false)) {

		$sql = "select x,y,name from camp where status = 1";
		$this->query($sql);
		$param = array('conditions' => array('Camp.status' => 1),
					   'fields' => array('Camp.id','Camp.x','Camp.y','Camp.name','Camp.master_id','Master.name','Master.country'),
					   );
		$list = $this->find('all',$param);
		$res = array();
		foreach ($list as $key => $val) {
		  $idx = $val['Camp']['x'].'.'.$val['Camp']['y'];
		  $res[$idx] = array('camp' => $val['Camp']['name'],
							 'id' => $val['Camp']['id'],
							 'master' => $val['Master']['name'],
							 'country' => $val['Master']['country'],
							 'master_id'=> $val['Camp']['master_id']);
		}
		Cache::set(array('duration' => '+24 hour'));
		Cache::write($cacheKey, $res);
	  }
	  //	  pr($res);
	  return $res;
	}
}
