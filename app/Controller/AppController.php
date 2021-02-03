<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $components = array(
		'Session',
		'Auth'=>array(
		'loginRedirect'=>array('controller'=>'Users','action'=>'index_reports'),
		'logoutRedirect'=>array('controller'=>'users','action'=>'login'),
		//'authError'=>'Permission Denied',
		'authorize'=>array('Controller')
		)
	);
// declaring the Auth component and setting the redirect actions
	public $helpers = array('Html', 'Form', 'Session','Js');
	Public function isAuthorized($user){
		return true;
	}

	public function beforeFilter(){
		$this->set('logged_in',$this->Auth->loggedIn());
		$this->set('current_user',$this->Auth->User());
	}
}
