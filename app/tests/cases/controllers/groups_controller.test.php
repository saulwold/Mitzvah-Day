<?php 
/* SVN FILE: $Id$ */
/* GroupsController Test cases generated on: 2010-01-07 11:00:30 : 1262890830*/
App::import('Controller', 'Groups');

class TestGroups extends GroupsController {
	var $autoRender = false;
}

class GroupsControllerTest extends CakeTestCase {
	var $Groups = null;

	function startTest() {
		$this->Groups = new TestGroups();
		$this->Groups->constructClasses();
	}

	function testGroupsControllerInstance() {
		$this->assertTrue(is_a($this->Groups, 'GroupsController'));
	}

	function endTest() {
		unset($this->Groups);
	}
}
?>