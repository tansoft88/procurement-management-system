<?php
/**
 * TaxiRequestFixture
 *
 */
class TaxiRequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'request_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'taxi_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'total_distance' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'amount_due' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'taxi_rate_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'request_from' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'due_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'location_distance_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'approved_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'request_code' => 'Lorem ipsum dolor sit amet',
			'request_status_id' => 1,
			'employee_id' => 1,
			'taxi_detail_id' => 1,
			'total_distance' => 1,
			'amount_due' => 1,
			'taxi_rate_id' => 1,
			'request_from' => 1,
			'due_date' => '2019-03-20 22:19:54',
			'location_distance_id' => 1,
			'created' => 1553116794,
			'approved_by' => 'Lorem ipsum dolor sit amet'
		),
	);
}
