<?php
/* Alliance Test cases generated on: 2012-02-13 12:03:51 : 1329102231*/
App::import('Model', 'Alliance');

class AllianceTestCase extends CakeTestCase {
	var $fixtures = array('app.alliance');

	function startTest() {
		$this->Alliance =& ClassRegistry::init('Alliance');
	}

	function endTest() {
		unset($this->Alliance);
		ClassRegistry::flush();
	}

}
