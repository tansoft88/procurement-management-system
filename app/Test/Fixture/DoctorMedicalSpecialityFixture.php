<?php
/**
 * DoctorMedicalSpecialityFixture
 *
 */
class DoctorMedicalSpecialityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'ecnumber' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'medical_speciality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'ecnumber' => 1,
			'medical_speciality_id' => 1
		),
	);
}
