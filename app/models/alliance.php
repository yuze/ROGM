<?php
class Alliance extends AppModel {
	var $name = 'Alliance';
	var $useTable = 'alliance';
	var $displayField = 'name';
	var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '同盟名を入力してください',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'すでに同盟が存在します',
			),
		),
		'country' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => '所属国を選択してください',
			),
		),
	);

	var $belongsTo = array(
		'Master' => array(
			'className' => 'Master',
			'foreignKey' => 'master_id',
			'conditions' => '',
			'fields' => 'name',
			'order' => ''
		)
	);

}
