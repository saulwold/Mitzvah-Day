<?php
class DonationsController extends AppController {

	var $name = 'Donations';
	var $helpers = array('Html', 'Form');

	private function index() {
		$this->Donation->recursive = 0;
		$this->set('donations', $this->paginate());
	}

	private function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Donation.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('donation', $this->Donation->read(null, $id));
	}

	private function add() {
		if (!empty($this->data)) {
			$this->Donation->create();
			if ($this->Donation->save($this->data)) {
				$this->Session->setFlash(__('The Donation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Donation could not be saved. Please, try again.', true));
			}
		}
		$people = $this->Donation->Person->find('list');
		$this->set(compact('people'));
	}

	private function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Donation', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Donation->save($this->data)) {
				$this->Session->setFlash(__('The Donation has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Donation could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Donation->read(null, $id);
		}
		$people = $this->Donation->Person->find('list');
		$this->set(compact('people'));
	}

	private function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Donation', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Donation->del($id)) {
			$this->Session->setFlash(__('Donation deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
