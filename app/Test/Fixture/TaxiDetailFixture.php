<?php
/**
 * TaxiDetailFixture
 *
 */
class TaxiDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'taxi_rate_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'reg_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'color' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'driver_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'driver_surname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cell_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'address' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'licence_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'permit_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'taxi_rate_id' => 1,
			'reg_number' => 'Lorem ipsum dolor ',
			'color' => 'Lorem ipsum dolor ',
			'driver_name' => 'Lorem ipsum dolor sit amet',
			'driver_surname' => 'Lorem ipsum dolor sit amet',
			'email_address' => 'Lorem ipsum dolor sit amet',
			'cell_number' => 1,
			'address' => 1,
			'licence_number' => 'Lorem ipsum dolor ',
			'permit_number' => 'Lorem ipsum dolor sit amet'
		),
	);
}
