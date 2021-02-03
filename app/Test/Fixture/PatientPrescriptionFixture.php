<?php
/**
 * PatientPrescriptionFixture
 *
 */
class PatientPrescriptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'patient_encounter_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'drug_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'drug_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quantity' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'daily_dosage' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'drug_measurement_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'drug_dosage_frequency_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'prescription_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'prescribed_by' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 255),
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
			'drug_type_id' => 1,
			'drug_code' => 'Lorem ipsum dolor sit amet',
			'quantity' => 1,
			'daily_dosage' => 1,
			'drug_measurement_id' => 1,
			'drug_dosage_frequency_id' => 1,
			'prescription_date' => '2018-08-21 11:22:08',
			'prescribed_by' => 1,
			'ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
