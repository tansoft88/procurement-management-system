<?php
/**
 * PatientFamilyDetailFixture
 *
 */
class PatientFamilyDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'file_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fullname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dob' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'drug_allergies' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bloog_group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'other_details' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'file_number' => 'Lorem ipsum dolor sit amet',
			'fullname' => 'Lorem ipsum dolor sit amet',
			'dob' => '2018-03-01',
			'drug_allergies' => 'Lorem ipsum dolor sit amet',
			'bloog_group_id' => 1,
			'other_details' => 'Lorem ipsum dolor sit amet'
		),
	);
}
