<?php 
/* SVN FILE: $Id$ */
/* PeopleController Test cases generated on: 2010-01-07 11:00:42 : 1262890842*/
App::import('Controller', 'People');

class TestPeople extends PeopleController {
	var $autoRender = false;
}

class PeopleControllerTest extends CakeTestCase {
	var $People = null;

	function startTest() {
		$this->People = new TestPeople();
		$this->People->constructClasses();
	}

	function testPeopleControllerInstance() {
		$this->assertTrue(is_a($this->People, 'PeopleController'));
	}

	function endTest() {
		unset($this->People);
	}
}
?>