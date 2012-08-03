<?php
class Master extends AppModel {
  var $name = 'Master';
  var $useTable = 'master';
  var $displayField = 'name';
  //  var $virtualFields = array(
  //		 'freeword' => 'CONCAT(Master.gm1_name," ",Master.gm2_name," ",Master.gm3_name," ",Master.gm4_name," ",Master.gm5_name)',
  //		 );
  var $validate = array(
						'country' => array(
										   'notempty' => array(
															   'rule' => array('notempty'),
															   'message' => '所属国を選択してください',
															   ),
										   'numeric' => array(
															  'rule' => array('numeric'),
															  //'message' => 'Your custom message here',
															  ),
										   ),
						'name' => array(
										'notempty' => array(
															'rule' => array('notempty'),
															'message' => 'マスター名を入力してください',
															),
										'isUnique' => array(
															'rule' => array('isUnique'),
															'message' => 'すでにマスター名が存在します',
															),
										),
						);

  var $belongsTo = array(
						 'Alliance' => array(
											 'className' => 'Alliance',
											 'foreignKey' => 'alliance_id',
											 'conditions' => '',
											 'fields' => '',
											 'order' => ''
											 )
						 );
}
