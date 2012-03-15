<?php

class EventsController extends AppController {

	var $name = 'Events';
	var $helpers = array('Html', 'Form');
//        var $paginate = array (
//	    'contain' => array ('Person'),
//	    'conditions' => array('Person.id > 20'),
//	    'order' => array ('Event.event_name' => 'asc'),
//        );

	function summary() {
	    // $conditions = array('Person.id > 20');
	    $conditions = '';
            $fields = array('id', 'event_name', 'enrolled');
            $contain = array(
            );
	    $events = $this->Event->find('all', array('conditions' => $conditions, 'fields' => $fields, 'contain' => $contain));
debug($events);
            $this->set('events', $events);
	}
	function report() {
	    // $conditions = array('Person.id > 20');
	    $conditions = '';
            $fields = array('id', 'event_name');
            $contain = array(
                'Person' => array (
                    'fields' => array('last_name', 'first_name', 'email', 'phone_number', 'tshirt'),
		    'Note',
                ),
            );
	    $events = $this->Event->find('all', array('conditions' => $conditions, 'fields' => $fields, 'contain' => $contain));
            $this->set('events', $events);
	}

	function index() {
		$this->Event->recursive = 0;
		$this->paginate = array(
				'order' => array("Event.ordinal")
		);
		$this->set('events', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->redirect('/');
		}
		$events = $this->Event->getEvents();
		$fullEvents = $this->Event->getFullEvents();
		$this->set(compact('events', 'fullEvents'));
		$this->set('project', $this->Event->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Event->create();
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The Event has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Event could not be saved. Please, try again.', true));
			}
		}
		
		$people = $this->Event->Person->find('all', array(
			'fields' => array('Person.first_name', 'Person.last_name', 'Person.id'),
			'conditions' => array(),
			'contain' => array()
		));

		$this->set(compact('people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Event', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Event->save($this->data)) {
				$this->Session->setFlash(__('The Event has been saved', true));				
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Event could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Event->read(null, $id);
		}

		$people = $this->Event->Person->find('all', array(
			'fields' => array('Person.first_name', 'Person.last_name', 'Person.id'),
			'conditions' => array(),		
			'contain' => array()
		));

		$this->set(compact('people'));
	}

	function deletePerson($id = null, $event_id = null) {
		if (!$id || !$event_id) {
			$this->Session->setFlash(__('Invalid id for Event', true));
			$this->redirect(array('action'=>'report'));
		}
		if ($this->Event->Person->del($id)) {
			$this->Event->updateEnrolled($event_id, -1);
			$this->Session->setFlash(__('Person deleted', true));
			$this->redirect(array('action'=>'report'));
		}
	}
  function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Event', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Event->delete($id)) {
			$this->Session->setFlash(__('Event deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
