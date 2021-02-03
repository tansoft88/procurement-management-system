<?php
/**
 * ClientDetailFixture
 *
 */
class ClientDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ecnumber' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'company_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'company_location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'noise_ban_color_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lastname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created_at' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'updated_at' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'updated_by' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'ecnumber', 'unique' => 1), 'id' => array('column' => 'id', 'unique' => 1)),
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
			'ecnumber' => 'Lorem ipsum dolor sit amet',
			'company_detail_id' => 1,
			'company_location_id' => 1,
			'department_id' => 1,
			'noise_ban_color_id' => 1,
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'date_of_birth' => '2017-12-03',
			'created_at' => 1,
			'created_by' => 'Lorem ipsum dolor sit amet',
			'updated_at' => 1,
			'updated_by' => 'Lorem ipsum dolor sit amet'
		),
	);
}
