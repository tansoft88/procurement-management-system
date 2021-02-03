<?php
App::uses('AppController', 'Controller');
/**
 * TenderStatuses Controller
 *
 * @property TenderStatus $TenderStatus
 */
class TenderStatusesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TenderStatus->recursive = 0;
		$this->set('tenderStatuses', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TenderStatus->id = $id;
		if (!$this->TenderStatus->exists()) {
			throw new NotFoundException(__('Invalid tender status'));
		}
		$this->set('tenderStatus', $this->TenderStatus->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TenderStatus->create();
			if ($this->TenderStatus->save($this->request->data)) {
				$this->Session->setFlash('The tender status has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TenderStatus->id = $id;
		if (!$this->TenderStatus->exists()) {
			throw new NotFoundException(__('Invalid tender status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TenderStatus->save($this->request->data)) {
			$this->Session->setFlash('The tender status has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender status could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TenderStatus->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TenderStatus->id = $id;
		if (!$this->TenderStatus->exists()) {
			throw new NotFoundException(__('Invalid tender status'));
		}
		if ($this->TenderStatus->delete()) {
			$this->Session->setFlash(__('Tender status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tender status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
