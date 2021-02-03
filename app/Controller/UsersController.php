<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

var $components = array("Email","Session");
var $helpers = array("Html","Form","Session");
	
	public function beforeFilter(){
 	parent::beforeFilter();
	$this->Auth->allow('login');
	$this->Auth->allow('add');
	 $this->Auth->allow('forgetpwd'); 
	   $this->Auth->allow('reset'); 
	   $this->Auth->allow('index'); 
	   $this->Auth->allow('edit'); 
	   $this->Auth->allow('delete'); 
	   $this->Auth->allow('index_summary'); 
	}
	
	//enrolment report
	public function index_summary(){
		if($this->request->is('post') and !empty($this->request->data['User']['system_group_id'])){
			$group_id=$this->request->data['User']['system_group_id'];
			//find the group name
			$group_names = $this->User->SystemGroup->find('first', array('fields'=>array('account_type_name'),'conditions'=>array('id'=>$group_id),'recursive'=>-1));
			$group_name=$group_names['SystemGroup']['account_type_name'];
			//find all user details
		$user_details= $this->User->find('all',array('conditions'=>array('User.system_group_id'=>$group_id),'group'=>array('email_address'),'recursive' =>-1));
		if(empty($user_details)){
				$this->Session->setFlash(__('No users found for the selected system role'));
		}
			//debug($group_name);die();
				$this->set(compact('group_name','user_details'));
		}
		$systemGroups = $this->User->SystemGroup->find('list',array('fields'=>array('id','account_type_name'),'conditions'=>array('SystemGroup.id'=>array(2,3))));
		$this->set(compact('systemGroups'));
}
	
public function index_reports(){
}
	public function login(){
		if($this->request->is('post')){
		//finding the system group
		$logincredentials=$this->data;
				foreach($logincredentials as $logg){
				$login=$logg;
				}

				$usernamelog=$logg['username'];
				
				$groupmember = $this->User->find('first', array('fields'=>array('id','system_group_id'),'conditions'=>array('username'=>$usernamelog),'recursive'=>-1));
				if($groupmember != false){
					$group = $groupmember['User']['system_group_id'];
					$grpmbr = $group; //did this so that if either variable was used the code will still run.
				}else{
				$this->Session->setFlash('Login details incorrect.Please try again');
				$this->redirect(array('controller'=>'Users','action'=>'login'));
				}
			if ($this->Auth->login() && $grpmbr == 3){//Admin assistant
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 4){//Supplier
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 2){//Department Admin
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 1){//Procurement officer
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 5){//Secretary
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			else{
				$this->Session->setFlash('Your username or password is incorrect');
			}
		}
		if($this->Session->read('Auth.User.username') != null){
			$current_user['username'] = $this->Session->read('Auth.User.username');
			$usernamelog=$current_user['username'];
				$groupmember = $this->User->find('first', array('fields'=>array('id','system_group_id'),'conditions'=>array('username ='=>$usernamelog),'recursive'=>-1));

				if($groupmember != false){
					$group = $groupmember['User']['system_group_id'];
					$grpmbr = $group; //did this so that if either variable was used the code will still run.
				}

			if ($this->Auth->login() && $grpmbr == 3){//Admin assistant
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 4){//Supplier
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 2){//Department Admin
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 1){//Procurement officer
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			elseif ($this->Auth->login() && $grpmbr == 5){//Secretary
				$this->redirect($this->Auth->loginRedirect = array('controller' => 'Users', 'action'=> 'index_reports'));
			}
			}
	}
	
	
	public function logout(){
	$this->Session->destroy();
		$this->Session->setFlash('You have been logged out');
		$this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
 
 public function index() {
 $this->User->recursive = 0;
		$this->set('users', $this->paginate());
		
 }
 
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$system_group= $this->User->find('list',array('fields'=>array('system_group_id'),'conditions'=>array('User.username'=>$current_user['username'])));
		//user system group
			foreach($system_group as $sys_group){
			$system_group_id= $sys_group;
			}
		if ($this->request->is('post')) {
		$userDetails = $this->User->find('list',array('conditions'=>array('User.username'=>$this->request->data['User']['username'])));
		$systemGroups = $this->User->SystemGroup->find('list',array('fields'=>array('id','account_type_name')));
		//find use department
		if(!empty($userDetails)){
			$this->Session->setFlash(__('User already exists'));
			$this->set(compact('systemGroups'));
			return false;
			//$this->redirect(array('action' => 'add'));
			}
		$email= $this->request->data['User']['email_address'];
		//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$ip_address = $_SERVER['REMOTE_ADDR'];
		//creator and ip
		$this->request->data['User']['create_ip']= $ip_address;
		$this->request->data['User']['created_by'] = $current_user['username'];
			$this->User->create();
			//redirect after saving
			if ($this->User->save($this->request->data)){
				$this->Session->setFlash('The user details has been saved','default',array('class'=>'success'));
				$this->redirect(array('controller'=>'Users','action' => 'index_reports'));
			}		
			else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
			   if($system_group_id == 1){
			$systemGroups = $this->User->SystemGroup->find('list',array('fields'=>array('id','account_type_name'),'conditions'=>array('SystemGroup.id'=>array(2))));
		   }
		   $departments = $this->User->Department->find('list',array('fields'=>array('id','name'),'conditions'=>array('Department.id <>'=>6)));
		$this->set(compact('systemGroups','departments'));
	}

	
	//Forgot password action
 function forgetpwd(){
        //$this->layout="signup";
        $this->User->recursive=-1;
        if(!empty($this->data))
        {
            if(empty($this->data['User']['email']))
            {
                $this->Session->setFlash('Please Provide Your Email Adress that You used to Register with Us');
            }
            else
            {
                $email=$this->data['User']['email'];
                $fu=$this->User->find('first',array('conditions'=>array('User.email_address'=>$email)));
                if($fu)
                {
                    //debug($fu);
                    if($fu['User']['status'])
                    {
                        $key = Security::hash(String::uuid(),'sha512',true);
                        $hash=sha1($fu['User']['username'].rand(0,100));
                        $url = Router::url( array('controller'=>'users','action'=>'reset'), true ).'/'.$key.'#'.$hash;
                        $ms=$url;
                        $ms=wordwrap($ms,1000);
                        //debug($url);
                        $fu['User']['tokenhash']=$key;
                        $this->User->id=$fu['User']['id'];
                        if($this->User->saveField('tokenhash',$fu['User']['tokenhash'])){
 
                            //============Email================//
                            /* SMTP Options */
                            $this->Email->smtpOptions = array(
                                'port'=>'25',
                                'timeout'=>'30',
                                'host' => '10.17.0.2',
                               // 'username'=>'accounts+example.com',
                               // 'password'=>'your password'
							   'log' => false
                                  );
                              $this->Email->template = 'resetpw';
                            $this->Email->from    = 'Training <nonreply@compcentre.uz.ac.zw>';
                            $this->Email->to      = $fu['User']['username'].'<'.$fu['User']['email_address'].'>';
                            $this->Email->subject = 'Reset Your Training Password';
                            $this->Email->sendAs = 'both';
 
                                $this->Email->delivery = 'smtp';
                                $this->set('ms', $ms);
                                $this->Email->send();
                                $this->set('smtp_errors', $this->Email->smtpError);
                            $this->Session->setFlash(__('Check Your Email To Reset your password', true));
							$this->redirect(array('controller'=>'users','action'=>'login'));
 
                            //============EndEmail=============//
                        }
                        else{
                            $this->Session->setFlash("Error Generating Reset link");
                        }
                    }
                    else
                    {
                        $this->Session->setFlash('This Account is not Active yet.Check Your mail to activate it');
                    }
                }
                else
                {
                    $this->Session->setFlash('Email does Not Exist');
                }
            }
        }
    }
	
	//Reset password action
	function reset($token=null){
        //$this->layout="Login";
		
        $this->User->recursive=-1;
        if(!empty($token)){
            $u=$this->User->findBytokenhash($token);
			//debug($u);die();
            if($u){
                $this->User->id=$u['User']['id'];
                if(!empty($this->data)){
                    $this->User->data=$this->data;
                    $this->User->data['User']['username']=$u['User']['username'];
                    $new_hash=sha1($u['User']['username'].rand(0,100));//created token
                    $this->User->data['User']['tokenhash']=$new_hash;
                    if($this->User->validates(array('fieldList'=>array('password','password_confirm')))){
                        if($this->User->save($this->User->data))
                        {
                            $this->Session->setFlash('Password Has been Updated');
                            $this->redirect(array('controller'=>'users','action'=>'login'));
                        }
 
                    }
                    else{
 
                        $this->set('errors',$this->User->invalidFields());
                    }
                }
            }
            else
            {
                $this->Session->setFlash('Token Corrupted,,Please Retry.the reset link work only for once.');
            }
        }
 
        else{
            $this->redirect('/');
        }
    }
	
/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		//user logged in
		$current_user['username'] = $this->Session->read('Auth.User.username');
		$system_group= $this->User->find('list',array('fields'=>array('system_group_id'),'conditions'=>array('User.username'=>$current_user['username'])));
		//user system group
			foreach($system_group as $sys_group){
			$system_group_id= $sys_group;
			}
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved','default',array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
	
			  if($system_group_id == 1){
			$systemGroups = $this->User->SystemGroup->find('list',array('fields'=>array('id','account_type_name'),'conditions'=>array('SystemGroup.id'=>array(2))));
		   }
		   $departments = $this->User->Department->find('list',array('fields'=>array('id','name'),'conditions'=>array('Department.id <>'=>6)));
		$this->set(compact('systemGroups','departments'));
	}
	 //Fuction to change Admin password
	function admin_password() {

				$username=$this->Session->read('Auth.User.username');
         if ($this->request->is('post') || $this->request->is('put') ){

                        $id = $this->User->find('list',array('conditions'=>array('username'=>$username)));
						 $uid = $this->User->findById($id);
					 $old = AuthComponent::password($this->data['User']['old_password']);


                    if($old!= $uid['User']['password'] )
                       {
                                $this->Session->setFlash("Old password incorrect");
                        }
                        else if($this->data['User']['new_password'] != $this->data['User']['confirm_password'] or empty($this->data['User']['new_password']) ) {
                                $this->Session->setFlash("Password mismatch");
                        }
                  else {
              $this->User->id = $id ;
              foreach($id as $reg){
		       $no=$reg;
		        }

               $this->User->id = $no ;
                    $this->User->saveField('password',($this->data['User']['new_password']));

							 $this->Session->setFlash("Password updated",'default',array('class' => 'success'));
                                        $this->redirect(array('controller'=>'Users','action'=>'index_reports'));
                                }
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	//--Search users
	public function user_search(){
		if(!empty($this->params['pass']['0'])){
		//Get the staff details
			$ecnumber = $this->params['pass']['0'];
			$userinfo = $this->User->find('all',array('conditions'=>array('User.ecnumber'=>$ecnumber)));
					}
		if($this->request->is('post')){
		$userdata = $this->Auth->user();
		$systemGroupId = $userdata['system_group_id'];
			 //search by email_address
			if($this->request->data['User']['search_by'] == 'email_address'){
				//Get the staff details
			$email_address = $this->request->data['User']['search'];
			$userinfo = $this->User->find('all',array('conditions'=>array('User.email_address'=>$email_address)));
			$zita = $this->User->find('list',array('fields'=>array('username'),'conditions'=>array('email_address'=>$email_address)));

		   if(empty($userinfo)){
			$this->Session->setFlash(__('User not found. Email address does not exist please check and try again'));
			$this->redirect(array('action' => 'user_search'));
				}
			$search_criter= 'email_address';
			$name=$userinfo[0]['User']['email_address'];

			$this->set(compact('search_criter','userinfo','zita','name'));
			}
	
			// search staff by username
				elseif($this->request->data['User']['search_by'] == 'username'){
			//Get the staff details
			$user_name = $this->request->data['User']['search'];
			if($systemGroupId == 58){
			$userinfo = $this->User->find('all',array('conditions'=>array('or'=>array(array('User.username LIKE'=>"%$user_name%",'User.system_group_id'=>14))),'recursive'=>-1));
				}else{
				$userinfo = $this->User->find('all',array('conditions'=>array('or'=>array(array('User.username LIKE'=>"%$user_name%"))),'recursive'=>-1));
				}
		 if(empty($userinfo)){
		 if($systemGroupId == 58){
			$this->Session->setFlash(__('User not found. Makes sure username is correct and try again'));
			$this->redirect(array('action' => 'index'));
			}else{
			$this->Session->setFlash(__('Usernot found'));
			$this->redirect(array('action' => 'user_search'));
			}
				}
				$search_criter= 'username';
				//$surname=$staffinfo[0]['StaffDetail']['surname'];
			    $name=$userinfo[0]['User']['username'];

			   $this->set(compact('search_criter','userinfo','name'));
				}
				else{
					$this->Session->setFlash(__('Please Enter  A Valid User Details'));
					$this->redirect(array('action' => 'user_search'));
					}
		}
		$this->set(compact('search_criter','userinfo'));
	}
	
	//-----Deactivate user
	public function deactivate($id = null) {
					$this->User->id = $id;					
					$this->User->updateAll(
							array('User.account_status' =>0),
							array('User.id'=>$id)
										);
			
					$this->Session->setFlash(__('The user has been deactivated','default',array('class' => 'success')));
					$this->redirect(array('controller'=>'users','action'=>'index'));
					}
											

				//-----Activate a user
				public function activate($id = null) {
							$this->User->id = $id;
							$this->User->updateAll(
								array('User.account_status' =>1),
								array('User.id'=>$id)
										);
							
					$this->Session->setFlash(__('The user has been activated','default',array('class' => 'success')));
					$this->redirect(array('controller'=>'users','action'=>'index'));
							}


}
