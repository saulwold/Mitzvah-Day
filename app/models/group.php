<?php
class Group extends AppModel {

	var $name = 'Group';
	var $validate = array(
		'group_name' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'groups_events',
			'foreignKey' => 'group_id',
			'associationForeignKey' => 'event_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'people_groups',
			'foreignKey' => 'group_id',
			'associationForeignKey' => 'person_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	function get_groups() {
		return $this->find('list', array('fields' => array('Group.group_name')));
	}
}
?>
