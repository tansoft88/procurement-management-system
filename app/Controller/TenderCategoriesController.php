<?php
App::uses('AppController', 'Controller');
/**
 * TenderCategories Controller
 *
 * @property TenderCategory $TenderCategory
 */
class TenderCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TenderCategory->recursive = 0;
		$this->set('tenderCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TenderCategory->id = $id;
		if (!$this->TenderCategory->exists()) {
			throw new NotFoundException(__('Invalid tender category'));
		}
		$this->set('tenderCategory', $this->TenderCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TenderCategory->create();
			if ($this->TenderCategory->save($this->request->data)) {
				$this->Session->setFlash('The tender category has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender category could not be saved. Please, try again.'));
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
		$this->TenderCategory->id = $id;
		if (!$this->TenderCategory->exists()) {
			throw new NotFoundException(__('Invalid tender category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TenderCategory->save($this->request->data)) {
					$this->Session->setFlash('The tender category has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TenderCategory->read(null, $id);
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
		$this->TenderCategory->id = $id;
		if (!$this->TenderCategory->exists()) {
			throw new NotFoundException(__('Invalid tender category'));
		}
		if ($this->TenderCategory->delete()) {
			$this->Session->setFlash(__('Tender category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tender category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
