<?php
App::uses('AppController', 'Controller');
/**
 * SystemGroups Controller
 *
 * @property SystemGroup $SystemGroup
 */
class SystemGroupsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SystemGroup->recursive = 0;
		$this->set('systemGroups', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SystemGroup->id = $id;
		if (!$this->SystemGroup->exists()) {
			throw new NotFoundException(__('Invalid system group'));
		}
		$this->set('systemGroup', $this->SystemGroup->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SystemGroup->create();
			//creator and ip
			//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$this->request->data['SystemGroup']['create_ip']= $ip_address;
		$this->request->data['SystemGroup']['created_by'] =	$current_user['username'];
			if ($this->SystemGroup->save($this->request->data)) {
				$this->Session->setFlash('The system group has been saved','default',array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system group could not be saved. Please, try again.'));
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
		$this->SystemGroup->id = $id;
		if (!$this->SystemGroup->exists()) {
			throw new NotFoundException(__('Invalid system group'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SystemGroup->save($this->request->data)) {
				$this->Session->setFlash('The system group has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The system group could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SystemGroup->read(null, $id);
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
		$this->SystemGroup->id = $id;
		if (!$this->SystemGroup->exists()) {
			throw new NotFoundException(__('Invalid system group'));
		}
		if ($this->SystemGroup->delete()) {
			$this->Session->setFlash(__('System group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('System group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
