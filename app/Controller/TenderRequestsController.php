<?php
App::uses('AppController', 'Controller');
/**
 * TenderRequests Controller
 *
 * @property TenderRequest $TenderRequest
 */
class TenderRequestsController extends AppController {
	
	public function index_pdf() {
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$options = array('conditions'=>array('TenderRequest.id <>'=>0),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			if($system_group_id == 2){
					$options = array('conditions'=>array('TenderRequest.department_id'=>$userdata['department_id']),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
			if($system_group_id == 3){
				$this->loadModel('SupplierDetail');
					$category_id  = $this->SupplierDetail->find('list',array('conditions'=>array('SupplierDetail.email_address'=>$userdata['username']),'fields'=>array('SupplierDetail.tender_category_id')));
					$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$category_id),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
		$this->set('tenderRequests', $this->paginate());
			$this->set(compact('system_group_id'));
					$this->render('index_pdf','export_xls');
	}
	
	public function request_report_pdf() {
		if ($this->request->is('post') and !empty($this->request->data['TenderRequest']['tender_category_id'])) {
			$tender_category_id = $this->request->data['TenderRequest']['tender_category_id'];
			
			//category name
		$cat_info = $this->TenderRequest->TenderCategory->find('first',array('conditions'=>array('TenderCategory.id'=>$tender_category_id)));
			$category_name = $cat_info['TenderCategory']['category_name'];
		//user data
			//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
			$user = $current_user['username'];
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$tender_category_id),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			if($system_group_id == 2){
					$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$tender_category_id,'TenderRequest.department_id'=>$userdata['department_id']),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
			$tenderRequests = $this->paginate();
			$this->set(compact('system_group_id','tender_category_id','category_name','tenderRequests'));
			$this->layout = 'pdf'; //this will use the pdf.ctp layout
			$this->render();
		}
			$tenderCategories = $this->TenderRequest->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('tenderCategories', 'tenderStatuses'));
	}
	
	public function request_report() {
		if ($this->request->is('post') and !empty($this->request->data['TenderRequest']['tender_category_id'])) {
			$tender_category_id = $this->request->data['TenderRequest']['tender_category_id'];
			
			//category name
		$cat_info = $this->TenderRequest->TenderCategory->find('first',array('conditions'=>array('TenderCategory.id'=>$tender_category_id)));
			$category_name = $cat_info['TenderCategory']['category_name'];
		//user data
			//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
			$user = $current_user['username'];
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
		$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$tender_category_id),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			if($system_group_id == 2){
					$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$tender_category_id,'TenderRequest.department_id'=>$userdata['department_id']),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
		$this->set('tenderRequests', $this->paginate());
			$this->set(compact('system_group_id','tender_category_id','category_name'));
		}
			$tenderCategories = $this->TenderRequest->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$this->set(compact('tenderCategories', 'tenderStatuses'));
	}
	
	//Download tender responses
	public function download_files($id) {
		
		//find the number of allowed quotes 
		$this->loadModel('TenderResponseParameter');
		$min_quotes = $this->TenderResponseParameter->find('first',array('fields'=>array('min_rqrd_quotations'),'conditions'=>array('TenderResponseParameter.id <>'=>0)));
		$num_quotes = $min_quotes['TenderResponseParameter']['min_rqrd_quotations'];
		
		//tender details
		$tender_info = $this->TenderRequest->find('first',array('fields'=>array('id'),'conditions'=>array('TenderRequest.tender_code'=>$id)));
		$tender_id = $tender_info['TenderRequest']['id'];
		
		//find count of responses
		$num_reponses= $this->TenderRequest->TenderResponse->find('list',array('fields'=>array('id'),'conditions'=>array('TenderResponse.tender_request_id'=>$tender_id)));
		$num_res = count($num_reponses);
		if($num_res < $num_quotes){
				$this->Session->setFlash('The number of quotations received is less than the minimum required.Cannot Download');
				$this->redirect(array('action' =>'index'));
		}
		
					// Get real path for our folder
				$rootPath = realpath('folder-to-zip');
				$rootPath = APP . 'tenders\\'.$id;

				// Initialize archive object
				$this->Zip = new ZipArchive();
				$this->Zip->open($id.".zip", ZipArchive::CREATE | ZipArchive::OVERWRITE);
				// Create recursive directory iterator
				/** @var SplFileInfo[] $files */
				$files = new RecursiveIteratorIterator(
					new RecursiveDirectoryIterator($rootPath),
					RecursiveIteratorIterator::LEAVES_ONLY
				);

				
				foreach ($files as $name => $file)
				{
					// Skip directories (they would be added automatically)
					if (!$file->isDir())
					{
						// Get real and relative path for current file
						$filePath = $file->getRealPath();
					
						$relativePath = substr($filePath, strlen($rootPath) + 1);
						// Add current file to archive
						$this->Zip->addFile($filePath, $relativePath);
					}
				}
				// Zip archive will be created only after closing object
			$this->Zip->close();
						
		//----------//
		
		
    $this->viewClass = 'Media';
    $path  = APP . 'webroot\\';
	$rootPath = realpath($path);
	//debug($path);die();
    // in this example $path should hold the filename but a trailing slash
    $params = array(
		'id' => "\\".$id.".zip",
       // 'name' => $id.".zip",
        'download' => true,
        'extension' => 'zip',
        'path' =>$rootPath
    );
    $this->set($params);
	}
	
	

 //function to generate fil
	function file_naming($input){
	//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		//user data
			$userdata = $this->Auth->user();
			$dept_id = $userdata['department_id'];
	$date2=date('Y-m-d');
	$date= preg_replace('/-/','',$date2);
	$this->loadModel('Department');
		$dept_user = $this->Department->find('first',array('fields'=>array('name'),'conditions'=>array('Department.id'=>$dept_id)));
		$input += 1;
		$num= "TR".$date.str_pad($input,3, "0", STR_PAD_LEFT);
		return $num;

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
		$options = array('conditions'=>array('TenderRequest.id <>'=>0),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			if($system_group_id == 2){
					$options = array('conditions'=>array('TenderRequest.department_id'=>$userdata['department_id']),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
			if($system_group_id == 3){
				$this->loadModel('SupplierDetail');
					$category_id  = $this->SupplierDetail->find('list',array('conditions'=>array('SupplierDetail.email_address'=>$userdata['username']),'fields'=>array('SupplierDetail.tender_category_id')));
					$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$category_id),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
			}
		$this->set('tenderRequests', $this->paginate());
			$this->set(compact('system_group_id'));
	}
	
	public function index_supplier() {
		//user data
			$userdata = $this->Auth->user();
			$system_group_id = $userdata['system_group_id'];
			$this->loadModel('SupplierDetail');
			$category_id  = $this->SupplierDetail->find('list',array('conditions'=>array('SupplierDetail.email_address'=>$userdata['username']),'fields'=>array('SupplierDetail.tender_category_id')));
			$options = array('conditions'=>array('TenderRequest.tender_category_id'=>$category_id),'order'=>array('TenderRequest.request_status_id ASC','TenderRequest.id ASC'));
			     $this->paginate = $options;
		$this->set('tenderRequests', $this->paginate());
			$this->set(compact('system_group_id'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TenderRequest->id = $id;
		if (!$this->TenderRequest->exists()) {
			throw new NotFoundException(__('Invalid tender request'));
		}
		$this->set('tenderRequest', $this->TenderRequest->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
			$user = $current_user['username'];
		//user data
			$userdata = $this->Auth->user();
			//generating the file name
							$id_auto=$this->TenderRequest->find('count');
							$tender_code = $this->file_naming($id_auto);
				//variables to be save			
			$this->request->data['TenderRequest']['department_id'] = $userdata['department_id'];
			$this->request->data['TenderRequest']['tender_code'] = $tender_code;
			$this->request->data['TenderRequest']['created_by'] = $user;
			
			if ($this->TenderRequest->save($this->request->data)) {
				$this->Session->setFlash('The tender request has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender request could not be saved. Please, try again.'));
			}
		}
		$tenderCategories = $this->TenderRequest->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$tenderStatuses = $this->TenderRequest->TenderStatus->find('list');
		$this->set(compact('tenderCategories', 'tenderStatuses'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TenderRequest->id = $id;
		if (!$this->TenderRequest->exists()) {
			throw new NotFoundException(__('Invalid tender request'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TenderRequest->save($this->request->data)) {
			$this->Session->setFlash('The tender request has been saved','default',array('class'=>'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tender request could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TenderRequest->read(null, $id);
		}
		$tenderCategories = $this->TenderRequest->TenderCategory->find('list',array('fields'=>array('id','category_name')));
		$tenderStatuses = $this->TenderRequest->TenderStatus->find('list');
		$this->set(compact('tenderCategories', 'tenderStatuses'));
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
		$this->TenderRequest->id = $id;
		if (!$this->TenderRequest->exists()) {
			throw new NotFoundException(__('Invalid tender request'));
		}
		if ($this->TenderRequest->delete()) {
			$this->Session->setFlash(__('Tender request deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tender request was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
