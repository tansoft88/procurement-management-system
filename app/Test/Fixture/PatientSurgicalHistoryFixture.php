<?php
/**
 * PatientSurgicalHistoryFixture
 *
 */
class PatientSurgicalHistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'previous_operation' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'operation_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'place_of_operation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_of_operation' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'file_number' => 1,
			'previous_operation' => 1,
			'operation_type_id' => 1,
			'place_of_operation' => 'Lorem ipsum dolor sit amet',
			'date_of_operation' => '2018-02-28',
			'created' => '2018-02-28 14:12:26',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2018-02-28 14:12:26',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modify_ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
