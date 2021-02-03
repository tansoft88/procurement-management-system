<?php
/**
 * PatientMedicalHistoryFixture
 *
 */
class PatientMedicalHistoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'current_chronic_medication' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'previous_hospital_admissions' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'reasons_for_admission' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'treatment_given' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'current_chronic_medication' => 'Lorem ipsum dolor sit amet',
			'previous_hospital_admissions' => 1,
			'reasons_for_admission' => 'Lorem ipsum dolor sit amet',
			'treatment_given' => 'Lorem ipsum dolor sit amet',
			'created' => '2018-02-28 12:42:10',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2018-02-28 12:42:10',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modify_ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
