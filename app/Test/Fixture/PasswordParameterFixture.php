<?php
/**
 * PasswordParameterFixture
 *
 */
class PasswordParameterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'min_length' => array('type' => 'integer', 'null' => false, 'default' => '8', 'length' => 5),
		'max_lifespan' => array('type' => 'integer', 'null' => false, 'default' => '90', 'length' => 5),
		'rqr_special_chars' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'rqr_numbers' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'rqr_uppercase_letter' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'password_expires' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'lookback_period' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'min_length' => 1,
			'max_lifespan' => 1,
			'rqr_special_chars' => 1,
			'rqr_numbers' => 1,
			'rqr_uppercase_letter' => 1,
			'password_expires' => 1,
			'lookback_period' => 1,
			'created' => '2017-03-22 07:07:07',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'create_ip' => 'Lorem ipsum dolor sit amet',
			'modified' => '2017-03-22 07:07:07',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'modify_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
