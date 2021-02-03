<?php
/**
 * PatientReminderFixture
 *
 */
class PatientReminderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'active' => array('type' => 'string', 'null' => false, 'default' => 'NO', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'patient_encounter_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20),
		'mothly_reminder' => array('type' => 'string', 'null' => false, 'default' => 'NO', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'weekly_reminder' => array('type' => 'string', 'null' => false, 'default' => 'NO', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'daily_reminder' => array('type' => 'string', 'null' => false, 'default' => 'NO', 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'active' => 'Lor',
			'patient_encounter_id' => 1,
			'file_number' => 1,
			'mothly_reminder' => 'Lor',
			'weekly_reminder' => 'Lor',
			'daily_reminder' => 'Lor',
			'created' => '2018-10-12 13:05:25',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2018-10-12 13:05:25',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modified_ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
