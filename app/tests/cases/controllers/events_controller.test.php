<?php 
/* SVN FILE: $Id$ */
/* EventsController Test cases generated on: 2010-01-07 11:00:15 : 1262890815*/
App::import('Controller', 'Events');

class TestEvents extends EventsController {
	var $autoRender = false;
}

class EventsControllerTest extends CakeTestCase {
	var $Events = null;

	function startTest() {
		$this->Events = new TestEvents();
		$this->Events->constructClasses();
	}

	function testEventsControllerInstance() {
		$this->assertTrue(is_a($this->Events, 'EventsController'));
	}

	function endTest() {
		unset($this->Events);
	}
}
?>