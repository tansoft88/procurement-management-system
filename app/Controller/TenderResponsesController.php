<?php
App::uses('AppController', 'Controller');
/**
 * TenderResponses Controller
 *
 * @property TenderResponse $TenderResponse
 */
class TenderResponsesController extends AppController {
	
	public function index2() {
			$tender_id =$this->params['pass'][0];
			//debug($tender_id);die();
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$options = array('conditions'=>array('TenderResponse.tender_request_id'=>$tender_id),'order'=>array('TenderResponse.id ASC'));
			     $this->paginate = $options;
		$this->set('tenderResponses', $this->paginate());
		$this->set(compact('system_group_id'));
	}


		//approve quote
	public function approve_quote($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TenderResponse->id = $id;
		if (!$this->TenderResponse->exists()) {
			throw new NotFoundException(__('Invalid tender response'));
		}
		
		//find the number of allowed quotes 
		$this->loadModel('TenderResponseParameter');
		$min_quotes = $this->TenderResponseParameter->find('first',array('fields'=>array('min_rqrd_quotations'),'conditions'=>array('TenderResponseParameter.id <>'=>0)));
		$num_quotes = $min_quotes['TenderResponseParameter']['min_rqrd_quotations'];
		
		//tender details
		$tender_info = $this->TenderResponse->find('first',array('fields'=>array('tender_request_id'),'conditions'=>array('TenderResponse.id'=>$id)));
		$tender_id = $tender_info['TenderResponse']['tender_request_id'];
		
		//find count of responses
		$num_reponses= $this->TenderResponse->find('list',array('fields'=>array('id'),'conditions'=>array('TenderResponse.tender_request_id'=>$tender_id)));
		$num_res = count($num_reponses);
		if($num_res < $num_quotes){
				$this->Session->setFlash('The number of quotations received is less than the minimum required.Cannot Approve');
				$this->redirect(array('action' =>'index'));
		}
					 //user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$ip_address = $_SERVER['REMOTE_ADDR'];
		$user = $current_user['username'];
		if ($this->TenderResponse->updateAll(
				array('TenderResponse.approved'=>1,'TenderResponse.approved_by'=>"'$user'"),
				array('TenderResponse.id'=>$id))) {
					//close the tender
					$this->loadModel('TenderRequest');
				$this->TenderRequest->updateAll(
				array('TenderRequest.tender_status_id'=>2,'TenderRequest.tender_closed'=>1,'TenderRequest.closed_by'=>"'$user'"),
				array('TenderRequest.id'=>$tender_id));
				//Decline all other responses
				$this->TenderResponse->updateAll(
				array('TenderResponse.approved'=>2,'TenderResponse.approved_by'=>"'$user'"),
				array('TenderResponse.id <>'=>$id,'TenderResponse.tender_request_id'=>$tender_id));
			$this->Session->setFlash('The tender response has been approved','default',array('class'=>'success'));
			$this->redirect(array('controller'=>'TenderRequests','action' => 'index'));
		}
		$this->Session->setFlash(__('Tender response was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function index_pdf() {
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$this->TenderResponse->recursive = 0;
		$this->set('tenderResponses', $this->paginate());
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
		$this->TenderResponse->recursive = 0;
		$this->set('tenderResponses', $this->paginate());
		$this->set(compact('system_group_id'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TenderResponse->id = $id;
		if (!$this->TenderResponse->exists()) {
			throw new NotFoundException(__('Invalid tender response'));
		}
		$this->set('tenderResponse', $this->TenderResponse->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//debug($this->request->data);die();
				//user data
			$userdata = $this->Auth->user();
			$system_group_id=$userdata['system_group_id'];
			//user logged in
			$current_user['username'] = $this->Session->read('Auth.User.username');
			$user = $current_user['username'];
			//folder naming details
			$this->loadModel('SupplierDetail');
			$tender_code =$this->params['pass'][0];
			$tender_id =$this->params['pass'][1];
			$supp_id  = $this->SupplierDetail->find('first',array('conditions'=>array('email_address'=>$userdata['username']),'fields'=>array('id')));	 
			$supp_detail_id = $supp_id['SupplierDetail']['id'];
			//varibale details
			$this->request->data['TenderResponse']['tender_request_id'] =	$tender_id ;
			$this->request->data['TenderResponse']['supplier_detail_id'] =	$supp_detail_id ;
			$this->request->data['TenderResponse']['created_by'] =	$user ;
			//Upload file
		//making the directory with the supp email
			$files_dir = APP."tenders\\$tender_code\\$supp_detail_id\\";
			if (!file_exists($files_dir)) {
			mkdir($files_dir, 0777, true); 
			}
			
			//debug($this->request->data);die();
			//if nothing has been uploaded
			if(empty($this->request->data['TenderResponse']['Browse_File']['name'])){
			$this->Session->setFlash(__('No quotation file has been selected'));
			$this->redirect(array('action' =>'add',$tender_code,$tender_id));
			}
		//file name
			$filename = $this->request->data['TenderResponse']['Browse_File']['name'];	
			$this->request->data['TenderResponse']['file_attachment'] =	$filename;
			$path = pathinfo($filename);
			//allowed formats				
			$acceptable = array("pdf");
			if(!in_array($path['extension'],$acceptable)) {
           		$this->Session->setFlash('Error Uploading: Please upload files with .pdf file extension only');
				$this->redirect(array('action' =>'add',$tender_code,$tender_id));
              }
			 //upload file
			$filenames = $files_dir . $this->request->data['TenderResponse']['Browse_File']['name'];
			$success = move_uploaded_file($this->request->data['TenderResponse']['Browse_File']['tmp_name'],$filenames);  
			  
			if (($success) and ($this->TenderResponse->save($this->request->data))) {
				$this->Session->setFlash('The tender response has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender response could not be saved. Please, try again.'));
			}
		}
		$tenderRequests = $this->TenderResponse->TenderRequest->find('list');
		$supplierDetails = $this->TenderResponse->SupplierDetail->find('list');
		$this->set(compact('tenderRequests', 'supplierDetails'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TenderResponse->id = $id;
		if (!$this->TenderResponse->exists()) {
			throw new NotFoundException(__('Invalid tender response'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TenderResponse->save($this->request->data)) {
				$this->Session->setFlash('The tender response has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender response could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TenderResponse->read(null, $id);
		}
		$tenderRequests = $this->TenderResponse->TenderRequest->find('list');
		$supplierDetails = $this->TenderResponse->SupplierDetail->find('list');
		$this->set(compact('tenderRequests', 'supplierDetails'));
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
		$this->TenderResponse->id = $id;
		if (!$this->TenderResponse->exists()) {
			throw new NotFoundException(__('Invalid tender response'));
		}
		if ($this->TenderResponse->delete()) {
			$this->Session->setFlash(__('Tender response deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tender response was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
