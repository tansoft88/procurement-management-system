<?php
/**
 * DrugInventoryFixture
 *
 */
class DrugInventoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'drug_code' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'lot_number' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'manufacturer' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'expiration' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'quantity' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'drug_measurement_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'drug_code' => 1,
			'lot_number' => 1,
			'manufacturer' => 'Lorem ipsum dolor sit amet',
			'expiration' => '2018-09-26',
			'quantity' => 1,
			'drug_measurement_id' => 'Lorem ipsum dolor ',
			'created' => '2018-09-26 16:44:07',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'ip_address' => 'Lorem ipsum dolor sit amet'
		),
	);
}
