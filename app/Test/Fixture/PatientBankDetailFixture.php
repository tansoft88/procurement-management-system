<?php
/**
 * PatientBankDetailFixture
 *
 */
class PatientBankDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'patient_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'bank_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'branch_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'account_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'patient_detail_id' => 1,
			'bank_id' => 1,
			'branch_name' => 'Lorem ipsum dolor sit amet',
			'account_type' => 'Lorem ipsum dolor sit amet',
			'account_name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
