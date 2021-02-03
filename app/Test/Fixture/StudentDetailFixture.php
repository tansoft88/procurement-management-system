<?php
/**
 * StudentDetailFixture
 *
 */
class StudentDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'reg_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'programme_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'level_of_study' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'dob' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 200),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'suspended' => array('type' => 'string', 'null' => false, 'default' => 'No', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('id' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'reg_number' => 'Lorem ipsum dolor sit amet',
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'programme_id' => 1,
			'level_of_study' => 1,
			'dob' => '2019-10-10',
			'address' => 1,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'mobile' => 1,
			'suspended' => 'Lor'
		),
	);
}
