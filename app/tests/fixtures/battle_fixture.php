<?php
/* Battle Fixture generated on: 2012-02-15 15:45:39 : 1329288339 */
class BattleFixture extends CakeTestFixture {
	var $name = 'Battle';
	var $table = 'battle';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'atk_master_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'atk_camp_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'def_master_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'def_camp_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'atk' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'def' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'memo' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'atk_master_id' => array('column' => 'atk_master_id', 'unique' => 0), 'atk_camp_id' => array('column' => 'atk_camp_id', 'unique' => 0), 'def_master_id' => array('column' => 'atk_master_id', 'unique' => 0), 'def_camp_id' => array('column' => 'atk_camp_id', 'unique' => 0), 'status' => array('column' => 'status', 'unique' => 0), 'updated' => array('column' => 'updated', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'atk_master_id' => 1,
			'atk_camp_id' => 1,
			'def_master_id' => 1,
			'def_camp_id' => 1,
			'atk' => 1,
			'def' => 1,
			'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'created' => '2012-02-15 15:45:39',
			'updated' => '2012-02-15 15:45:39'
		),
	);
}
