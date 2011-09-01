<?php 
/* SVN FILE: $Id$ */
/* Event Test cases generated on: 2010-01-07 10:58:07 : 1262890687*/
App::import('Model', 'Event');

class EventTestCase extends CakeTestCase {
	var $Event = null;
	var $fixtures = array('app.event');

	function startTest() {
		$this->Event =& ClassRegistry::init('Event');
	}

	function testEventInstance() {
		$this->assertTrue(is_a($this->Event, 'Event'));
	}

	function testEventFind() {
		$this->Event->recursive = -1;
		$results = $this->Event->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Event' => array(
			'id'  => 1,
			'event_name'  => 'Lorem ipsum dolor sit amet',
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'max_people'  => 1,
			'location'  => 'Lorem ipsum dolor sit amet',
			'agency'  => 'Lorem ipsum dolor sit amet',
			'time'  => 'Lorem ipsum do',
			'restrictions'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created'  => '2010-01-07 10:58:06',
			'modified'  => '2010-01-07 10:58:06'
		));
		$this->assertEqual($results, $expected);
	}
}
?>