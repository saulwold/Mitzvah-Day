<?php
class PeopleController extends AppController {

	var $name = 'People';
	var $helpers = array('Html', 'Form');
	var $uses = array('Person', 'Event', 'Note');
	var $components = array('Email');
        var $thanks;

	function report() {
		$this->Person->recursive = 0;
		$peps = $this->Person->find('list');
		$notepeps = $this->Person->find('threaded');
		$this->set(compact('peps', 'notepeps'));
	}

	function index() {
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
	}

	private function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Person.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('person', $this->Person->read(null, $id));
	}

	private function add() {
		if (!empty($this->data)) {
			$this->Person->create();
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The Person has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Person could not be saved. Please, try again.', true));
			}
		}
		$events = $this->Person->Event->find('list');
		$groups = $this->Person->Group->find('list');
		$this->set(compact('events', 'groups'));
	}

	private function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Person', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The Person has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Person could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Person->read(null, $id);
		}
		$events = $this->Person->Event->find('list');
		$this->set(compact('events','groups'));
	}
	
	function registration() {
                // Change age grouping to int and print for validation
		// Reporting person by alpha
		// 	Event with people by alpha
		$enrolled = 0;
		if (!empty($this->data[0])) {
			$this->Person->create();
			$eventValid = true;
			if (empty($this->data[0]['Event']['Event'])) {
				$eventValid = false;	
				$form->validationErrors['Event']['Event'] = 'class= "erorr"';
				$this->Session->setFlash(__('Mitzvah Maker: Please select a valid Project to particpate in', true));
				$events = $this->Person->Event->getEvents();
				$fullEvents = $this->Person->Event->getFullEvents();
				$this->set(compact('events', 'fullEvents'));
				return;
			}
			if ($eventValid && $this->Person->save($this->data[0])) {
				$enrolled++;
				$parent_id = $this->Person->id;
				if (!empty($this->data[0]['Note'])) {
				    $this->Person->Note->create(array('Note' => 
				    	array('person_id' => $parent_id,
					'note' => $this->data[0]['Note']['note'])));
				    $this->Person->Note->save();
				}
				foreach($this->data as $key => $person) {
					if ($key == 0  || !is_numeric($key)) {
						continue;
					}
					if (!empty($person['Person']['first_name'])) {
						$enrolled++;
						$this->Person->create_child($parent_id, $person['Person']['first_name'], 
							$person['Person']['last_name'],
							$this->data[0]['Event']['Event']);
					}
				}
				$this->Person->Event->updateEnrolled($this->data[0]['Event']['Event'],
					$enrolled);
				$this->redirect('thankyou/' . $this->Person->id, NULL, false);
			} else {
				$this->Session->setFlash(__('Mitzvah Maker: We are missing some important information, please enter items marked in red', true));
			}
		}
		$events = $this->Person->Event->getEvents();
		$fullEvents = $this->Person->Event->getFullEvents();
		$this->set(compact('events', 'fullEvents'));
	}

	function thankyou($id = null) {
		if (!$id && empty($this->data)) {
			$this->redirect('/');
		}
		if (empty($this->data)) {
			$person = $this->Person->read(null, $id);
		}
		$events = $this->Person->Event->getEvents();
		$fullEvents = $this->Person->Event->getFullEvents();
		$this->set(compact('person', 'events', 'fullEvents'));

		$this->Email->from = 'Mitzvah Day <admin@mitzvah-day.org>';
		$this->Email->to = $person['Person']['email'];
		$this->Email->subject = 'Mitzvah Day Registration Confirmation';
		// $this->Email->sendAs = 'both'; // because we like to send pretty mail
		$this->Email->template = 'simple_message'; // note no '.ctp'
		if (! $this->Email->send() ) {
	            $this->Session->setFlash('Unable to Send Email');
		} 
	}
	

	private function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Person', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Person->del($id)) {
			$this->Session->setFlash(__('Person deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
