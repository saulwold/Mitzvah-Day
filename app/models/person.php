<?php
class Person extends AppModel {

	var $name = 'Person';
	var $actsAs = array('Containable', 'Tree');
	
	var $validate = array(
		'Person' => array('rule' => 'checkEventValid',
				'message' => 'error'),
		'first_name' => array('rule' => 'alphaNumeric',
				'allowEmpty' => false,
				'required' => true,
				'message' => 'error'),
		'last_name' => array('rule' => 'alphaNumeric',
				'allowEmpty' => false,
				'required' => true,
				'message' => 'error'),
		'phone_number' => array('rule' => 'phone',
				'allowEmpty' => false,
				'required' => true,
				'message' => 'error'),
		'email' => array('rule' => 'email',
				'allowEmpty' => false,
				'required' => true,
				'message' => 'error'),
		//'tshirt' => array('numeric'),
		//'password' => array('notempty'),
		//'last_donation' => array('date')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
		'Donation' => array(
			'className' => 'Donation',
			'foreignKey' => 'person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Note' => array(
			'className' => 'Note',
			'foreignKey' => 'person_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'people_events',
			'foreignKey' => 'person_id',
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
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'people_groups',
			'foreignKey' => 'person_id',
			'associationForeignKey' => 'group_id',
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
	
	function create_child($parent_id = null, $first_name = null, $last_name = null, $event = 0) {
		$parent = $this->findById($parent_id);
		
		if (! $last_name) {
			$last_name = $parent['Person']['last_name'];
		}
		
		$data = $this->create(array('Person' => array('parent_id' => $parent_id,
			'first_name' => $first_name, 'last_name' => $last_name, 
			'email' => $parent['Person']['email'],
			'phone_number' => $parent['Person']['phone_number']),
			'Event' => array('Event' => $event)));
		$this->saveAll($this->data, array('validate' => false));
	}

}

	function checkEventValid($check) {
		echo $check;
		return false;
	}
?>
