<?php
class GroupsController extends AppController {

	var $name = 'Groups';
	var $helpers = array('Html', 'Form');
	var $uses = array('Group', 'Person', 'Event');
        var $people_names = array();
	
	private function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

	private function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Group.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

	private function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The Group has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Group could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Event->find('list', array('fields' => array('Event.event_name')));
		$people = $this->Person->find('all', array('fields' => array('Person.id', 'Person.first_name', 'Person.last_name'), 'order' => 'Person.last_name ASC', 'recursive' => 0));
		foreach($people as $arr) {
			$person = $arr['Person'];
			$people_names[$person['id']] = $person['first_name'] . " " . $person['last_name'];
		}
		$this->set('people_names', $people_names);
		$this->set(compact('events'));
	}

	private function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Group', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The Group has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Group could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
		$events = $this->Group->Event->find('list');
	    
		$people = $this->Group->Person->find('list');
		$this->set(compact('events','people'));
	}

	private function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Group', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Group->del($id)) {
			$this->Session->setFlash(__('Group deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
