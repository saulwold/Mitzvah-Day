<?php 
/* SVN FILE: $Id$ */
/* Person Test cases generated on: 2010-01-07 10:59:26 : 1262890766*/
App::import('Model', 'Person');

class PersonTestCase extends CakeTestCase {
	var $Person = null;
	var $fixtures = array('app.person', 'app.donation');

	function startTest() {
		$this->Person =& ClassRegistry::init('Person');
	}

	function testPersonInstance() {
		$this->assertTrue(is_a($this->Person, 'Person'));
	}

	function testPersonFind() {
		$this->Person->recursive = -1;
		$results = $this->Person->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Person' => array(
			'id'  => 'Lorem ipsum dolor sit amet',
			'first_name'  => 'Lorem ipsum dolor sit amet',
			'last_name'  => 'Lorem ipsum dolor sit amet',
			'phone_number'  => 'Lorem ipsum dolor sit a',
			'tshirt'  => 1,
			'password'  => 'Lorem ipsum dolor sit amet',
			'last_donation'  => '2010-01-07 10:59:26',
			'created'  => '2010-01-07 10:59:26',
			'modified'  => '2010-01-07 10:59:26'
		));
		$this->assertEqual($results, $expected);
	}
}
?>