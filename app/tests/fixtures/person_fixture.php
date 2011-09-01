<?php 
/* SVN FILE: $Id$ */
/* Person Fixture generated on: 2010-01-07 10:59:26 : 1262890766*/

class PersonFixture extends CakeTestFixture {
	var $name = 'Person';
	var $table = 'people';
	var $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
		'first_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'last_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 32),
		'phone_number' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 25),
		'tshirt' => array('type'=>'integer', 'null' => false, 'default' => NULL),
		'password' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 36),
		'last_donation' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>