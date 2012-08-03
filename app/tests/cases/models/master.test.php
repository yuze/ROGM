<?php
/* Master Test cases generated on: 2012-02-13 12:08:01 : 1329102481*/
App::import('Model', 'Master');

class MasterTestCase extends CakeTestCase {
	var $fixtures = array('app.master', 'app.alliance');

	function startTest() {
		$this->Master =& ClassRegistry::init('Master');
	}

	function endTest() {
		unset($this->Master);
		ClassRegistry::flush();
	}

}
