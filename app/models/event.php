<?php
class Event extends AppModel {

	var $name = 'Event';
	var $actsAs = array('Tree', 'Containable');
        var $displayField = 'event_name';
	
	var $validate = array(
		'Event' => array('rule'=>'checkEvent'),
		'event_name' => array('notempty'),
		'description' => array('notempty'),
		'max_people' => array('numeric'),
		'location' => array('notempty'),
		'agency' => array('notempty'),
		'time' => array('notempty')
	);

	function checkEvent() {
		if (!empty($this->data['Event']['Event'])) {
			return true;
		}
		return false;
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasAndBelongsToMany = array(
		'Group' => array(
			'className' => 'Group',
			'joinTable' => 'groups_events',
			'foreignKey' => 'event_id',
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
		),
		'Person' => array(
			'className' => 'Person',
			'joinTable' => 'people_events',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'person_id',
			'unique' => true,
			'conditions' => array('Person.id > 20'),
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

	function findEventPeople($eventId) {
	    $conditions = array('Event.id' => $eventId);
	    $fields = array('id', 'event_name');
	    $contain = array(
		'Person' => array (
		    'fields' => array('last_name', 'first_name', 'email'),
		)
	    );
	    return $this->find('first', array('fields' => $fields, 'conditons' => $conditions, 'contain' => $contain));
	}
	function getEvents() {
		return $this->query("SELECT * from events WHERE events.enrolled < events.max_people AND NOT events.max_people = -1");
	}

	function getFullEvents() {
		return $this->query("SELECT * from events WHERE events.enrolled = events.max_people OR events.enrolled > events.max_people AND NOT events.max_people = 0 AND NOT events.max_people = -1");
	}

	function updateEnrolled($id = null, $count = 0) {
                if (!$id) {
			return;
		}
		$event = $this->read(null, $id);
		$updatedCount = $event['Event']['enrolled'] + $count;
		$this->saveField('enrolled', $updatedCount);
	}
}
?>
