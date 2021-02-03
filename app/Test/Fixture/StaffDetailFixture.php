<?php
/**
 * StaffDetailFixture
 *
 */
class StaffDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastname' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255),
		'tittle' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ecnumber' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'physical_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'work_phone' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'home_phone' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'email_address' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 1,
			'tittle' => 'Lorem ip',
			'ecnumber' => 1,
			'physical_address' => 'Lorem ipsum dolor sit amet',
			'contact_address' => 'Lorem ipsum dolor sit amet',
			'mobile' => 1,
			'work_phone' => 1,
			'home_phone' => 1,
			'email_address' => 1
		),
	);
}
