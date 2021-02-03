<?php
App::uses('AppController', 'Controller');
/**
 * TenderResponseParameters Controller
 *
 * @property TenderResponseParameter $TenderResponseParameter
 */
class TenderResponseParametersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TenderResponseParameter->recursive = 0;
		$this->set('tenderResponseParameters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TenderResponseParameter->id = $id;
		if (!$this->TenderResponseParameter->exists()) {
			throw new NotFoundException(__('Invalid tender response parameter'));
		}
		$this->set('tenderResponseParameter', $this->TenderResponseParameter->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			if ($this->TenderResponseParameter->save($this->request->data)) {
						$this->Session->setFlash('The tender response parameter has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender response parameter could not be saved. Please, try again.'));
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
		$this->TenderResponseParameter->id = $id;
		if (!$this->TenderResponseParameter->exists()) {
			throw new NotFoundException(__('Invalid tender response parameter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TenderResponseParameter->save($this->request->data)) {
				$this->Session->setFlash('The tender response parameter has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender response parameter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TenderResponseParameter->read(null, $id);
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
		$this->TenderResponseParameter->id = $id;
		if (!$this->TenderResponseParameter->exists()) {
			throw new NotFoundException(__('Invalid tender response parameter'));
		}
		if ($this->TenderResponseParameter->delete()) {
			$this->Session->setFlash(__('Tender response parameter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tender response parameter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
