<?php
class Battle extends AppModel {
	var $name = 'Battle';
	var $useTable = 'battle';
	var $validate = array(
		'atk_master_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '攻撃データを入力して下さい',
			),
		),
		'def_master_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '防衛データを入力してください',
			),
		),
		'atk' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '数字を入力してください',
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '総攻撃力を入力してください',
			),
		),
		'def' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '数字を入力してください',
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => '総防御力を入力してください',
			),
		),
	);

	var $belongsTo = array(
		'AtkMaster' => array(
			'className' => 'Master',
			'foreignKey' => 'atk_master_id',
			'conditions' => '',
			'fields' => 'id,name',
			'order' => ''
		),
		'AtkCamp' => array(
			'className' => 'Camp',
			'foreignKey' => 'atk_camp_id',
			'conditions' => '',
			'fields' => 'name,x,y',
			'order' => ''
		),
		'DefMaster' => array(
			'className' => 'Master',
			'foreignKey' => 'def_master_id',
			'conditions' => '',
			'fields' => 'id,name',
			'order' => ''
		),
		'DefCamp' => array(
			'className' => 'Camp',
			'foreignKey' => 'def_camp_id',
			'conditions' => '',
			'fields' => 'name,x,y',
			'order' => ''
		)
	);
}
