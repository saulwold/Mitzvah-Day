<?php 
/* SVN FILE: $Id$ */
/* Group Fixture generated on: 2010-01-07 10:58:31 : 1262890711*/

class GroupFixture extends CakeTestFixture {
	var $name = 'Group';
	var $table = 'groups';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'group_name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 64),
		'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'group_name'  => 'Lorem ipsum dolor sit amet',
		'created'  => '2010-01-07 10:58:31',
		'modified'  => '2010-01-07 10:58:31'
	));
}
?>