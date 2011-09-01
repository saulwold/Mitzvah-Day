<?php 
/* SVN FILE: $Id$ */
/* Event Fixture generated on: 2010-01-07 10:58:06 : 1262890686*/

class EventFixture extends CakeTestFixture {
	var $name = 'Event';
	var $table = 'events';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'event_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 48),
		'description' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'max_people' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'location' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 64),
		'agency' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 48),
		'time' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 16),
		'restrictions' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>