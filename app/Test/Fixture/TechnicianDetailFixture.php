<?php
/**
 * TechnicianDetailFixture
 *
 */
class TechnicianDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ec_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'surname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cell_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'home_phone' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'operating_district_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'ec_number' => 1,
			'title' => 'Lor',
			'firstname' => 'Lorem ipsum dolor sit amet',
			'surname' => 'Lorem ipsum dolor sit amet',
			'department_id' => 1,
			'email_address' => 'Lorem ipsum dolor sit amet',
			'cell_number' => 1,
			'home_phone' => 1,
			'address' => 'Lorem ipsum dolor sit amet',
			'operating_district_id' => 1
		),
	);
}
