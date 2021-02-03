<?php
/**
 * PatientReferralFixture
 *
 */
class PatientReferralFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'patient_encounter_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'file_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'referral_details' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_ip_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'referral_details' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2018-06-05 13:18:46',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet',
			'modified_date' => '2018-06-05 13:18:46',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modified_ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
