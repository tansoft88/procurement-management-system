<?php
/**
 * VerificationRateFixture
 *
 */
class VerificationRateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'billing_mode_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'unit_amount' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'institution_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'billing_mode_id' => 1,
			'unit_amount' => 1,
			'institution_type_id' => 1,
			'modified' => 1432103146,
			'modified_by' => 'Lorem ipsum dolor sit amet'
		),
	);
}
