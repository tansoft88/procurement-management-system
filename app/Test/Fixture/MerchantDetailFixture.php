<?php
/**
 * MerchantDetailFixture
 *
 */
class MerchantDetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'merchant_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'merchant_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'business_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cell_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'landline' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'operating_district_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'merchant_number' => 'Lorem ipsum dolor sit amet',
			'merchant_name' => 'Lorem ipsum dolor sit amet',
			'business_address' => 'Lorem ipsum dolor sit amet',
			'email_address' => 'Lorem ipsum dolor sit amet',
			'cell_number' => 1,
			'landline' => 1,
			'operating_district_id' => 1
		),
	);
}
