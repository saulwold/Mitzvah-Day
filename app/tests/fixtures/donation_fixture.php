<?php 
/* SVN FILE: $Id$ */
/* Donation Fixture generated on: 2010-01-07 10:53:53 : 1262890433*/

class DonationFixture extends CakeTestFixture {
	var $name = 'Donation';
	var $table = 'donations';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'donation_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 128),
		'amount' => array('type'=>'float', 'null' => false, 'default' => NULL, 'length' => 10),
		'reason' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'items' => array('type'=>'text', 'null' => false, 'default' => NULL),
		'person_id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'donation_name'  => 'Lorem ipsum dolor sit amet',
		'amount'  => 'Lorem ipsum dolor sit amet',
		'reason'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'items'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
		'person_id'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-01-07 10:53:53',
		'modified'  => '2010-01-07 10:53:53'
	));
}
?>