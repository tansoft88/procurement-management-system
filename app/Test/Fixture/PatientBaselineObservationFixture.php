<?php
/**
 * PatientBaselineObservationFixture
 *
 */
class PatientBaselineObservationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'patient_encounter_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'bp_systolic' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'bp_diastolic' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pulse' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'weight' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'height' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'bmi' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'patient_encounter_id' => 1,
			'file_number' => 1,
			'bp_systolic' => 1,
			'bp_diastolic' => 'Lorem ipsum dolor sit amet',
			'pulse' => 1,
			'weight' => 1,
			'height' => 1,
			'bmi' => 1,
			'created' => '2018-02-28 12:43:24',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
