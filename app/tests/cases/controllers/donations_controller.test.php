<?php 
/* SVN FILE: $Id$ */
/* DonationsController Test cases generated on: 2010-01-07 10:59:53 : 1262890793*/
App::import('Controller', 'Donations');

class TestDonations extends DonationsController {
	var $autoRender = false;
}

class DonationsControllerTest extends CakeTestCase {
	var $Donations = null;

	function startTest() {
		$this->Donations = new TestDonations();
		$this->Donations->constructClasses();
	}

	function testDonationsControllerInstance() {
		$this->assertTrue(is_a($this->Donations, 'DonationsController'));
	}

	function endTest() {
		unset($this->Donations);
	}
}
?>