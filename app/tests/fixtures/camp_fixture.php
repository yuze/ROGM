<?php
/* Camp Fixture generated on: 2012-02-13 12:05:38 : 1329102338 */
class CampFixture extends CakeTestFixture {
	var $name = 'Camp';
	var $table = 'camp';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'master_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'x' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'y' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 256, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'memo' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'master_id' => array('column' => 'master_id', 'unique' => 0), 'map' => array('column' => array('x', 'y'), 'unique' => 0), 'status' => array('column' => 'status', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'master_id' => 1,
			'x' => 1,
			'y' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'memo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'status' => 1,
			'created' => '2012-02-13 12:05:38',
			'updated' => '2012-02-13 12:05:38'
		),
	);
}
