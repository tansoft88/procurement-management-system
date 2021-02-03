<?php
App::uses('AppController', 'Controller');
/**
 * SupplierDetails Controller
 *
 * @property SupplierDetail $SupplierDetail
 */
class SupplierDetailsController extends AppController {

public function index_pdf() {
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$this->SupplierDetail->recursive = 0;
		if($system_group_id == 3){
					$options = array('conditions'=>array('SupplierDetail.email_address'=>$userdata['username']),'order'=>array('SupplierDetail.id ASC'));
			     $this->paginate = $options;
			}
		$this->set('supplierDetails', $this->paginate());
		$this->set(compact('system_group_id'));
		$this->render('index_pdf','export_xls');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$this->SupplierDetail->recursive = 0;
		if($system_group_id == 3){
					$options = array('conditions'=>array('SupplierDetail.email_address'=>$userdata['username']),'order'=>array('SupplierDetail.id ASC'));
			     $this->paginate = $options;
			}
		$this->set('supplierDetails', $this->paginate());
		$this->set(compact('system_group_id'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SupplierDetail->id = $id;
		if (!$this->SupplierDetail->exists()) {
			throw new NotFoundException(__('Invalid supplier detail'));
		}
		$this->set('supplierDetail', $this->SupplierDetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//check if supplier already exists
			$email  = $this->SupplierDetail->find('list',array('conditions'=>array('email_address'=>$this->request->data['SupplierDetail']['email_address']),'fields'=>array('id')));
			if(!empty($email)){
			$this->Session->setFlash(__('Supplier with the same email address is already in the system.'));
			$this->redirect(array('action' => 'add'));			
			}
			$this->SupplierDetail->create();
			if ($this->SupplierDetail->save($this->request->data)) {
				//=====automatically create Patient visit after entering Patient====//
				//Save the user details 
								$this->loadModel('User');
								$this->User->create();
								$this->User->set(array(
									'firstname' =>$this->request->data['SupplierDetail']['organization_name'],
									'lastname' =>$this->request->data['SupplierDetail']['organization_name'],
									'username' =>$this->request->data['SupplierDetail']['email_address'],
									'email_address' =>$this->request->data['SupplierDetail']['email_address'],
									'address' =>$this->request->data['SupplierDetail']['org_address'],
									'password'=>"password",
									'system_group_id'=>3,
									'department_id'=>6,
									'account_status'=>1,
									'created_by'=>$current_user['username'],
									));
									$this->User->save();	
				$this->Session->setFlash('The supplier details have been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier detail could not be saved. Please, try again.'));
			}
		}
		$tenderCategories = $this->SupplierDetail->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('tenderCategories'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SupplierDetail->id = $id;
		if (!$this->SupplierDetail->exists()) {
			throw new NotFoundException(__('Invalid supplier detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SupplierDetail->save($this->request->data)) {	
					$this->Session->setFlash('The supplier details have been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supplier detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SupplierDetail->read(null, $id);
		}
			$tenderCategories = $this->SupplierDetail->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('tenderCategories'));
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
		$this->SupplierDetail->id = $id;
		if (!$this->SupplierDetail->exists()) {
			throw new NotFoundException(__('Invalid supplier detail'));
		}
		if ($this->SupplierDetail->delete()) {
			$this->Session->setFlash(__('Supplier detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Supplier detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
