<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property SystemGroup $SystemGroup
 */
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {

public $belongsTo = array(
		'SystemGroup' => array(
			'className' => 'SystemGroup',
			'foreignKey' => 'system_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Department' => array(
			'className' => 'Department',
			'foreignKey' => 'department_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);

	public $name = 'User';
	public $actsAs = array('Acl' => array('type' => 'requester','enabled'=>false));
	
	//implementing bindnode for simplified per group permissions
	public function bindNode($user) {
    return array('model' => 'SystemGroup', 'foreign_key' => $user['User']['system_group_id']);
	}
	

    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['system_group_id'])) {
            $groupId = $this->data['User']['system_group_id'];
        } else {
            $groupId = $this->field('system_group_id');
        }
        if (!$groupId) {
            return null;
        } else {
            return array('SystemGroup' => array('id' => $groupId));
        }
    }

//some exceptions so AuthComponent will allow us to create some groups and users.
	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('*');
}

	
    public function beforeSave($options=array()){
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }
	
	//aclbehaviour

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lastname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'firstname' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'system_group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'department_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	
}
