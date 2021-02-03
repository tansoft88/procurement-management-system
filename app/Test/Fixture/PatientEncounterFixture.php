<?php
/**
 * PatientEncounterFixture
 *
 */
class PatientEncounterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'encounter_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'ecnumber' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'encounter_status' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'encounter_date' => '2018-02-28 12:39:10',
			'ecnumber' => 1,
			'encounter_status' => 1,
			'created' => '2018-02-28 12:39:10',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
