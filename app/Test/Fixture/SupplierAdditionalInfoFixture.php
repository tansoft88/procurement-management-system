<?php
/**
 * SupplierAdditionalInfoFixture
 *
 */
class SupplierAdditionalInfoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'organization_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'org_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'contact_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alt_contact_number1' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alt_contact_number2' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alt_email_address1' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'alt_email_address2' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valid_tax_clearance' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'valid_spb_registration' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'tax_clearance_expiry' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'spb_registration_expiry' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'email_address' => array('column' => 'email_address', 'unique' => 1)),
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
			'email_address' => 'Lorem ipsum dolor sit amet',
			'organization_name' => 'Lorem ipsum dolor sit amet',
			'org_address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'contact_number' => 'Lorem ipsum d',
			'alt_contact_number1' => 'Lorem ipsum d',
			'alt_contact_number2' => 'Lorem ipsum d',
			'alt_email_address1' => 'Lorem ipsum dolor sit amet',
			'alt_email_address2' => 'Lorem ipsum dolor sit amet',
			'valid_tax_clearance' => 1,
			'valid_spb_registration' => 1,
			'tax_clearance_expiry' => '2017-03-22',
			'spb_registration_expiry' => '2017-03-22',
			'created' => 1490169636,
			'modified' => 1490169636,
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'create_ip' => 'Lorem ipsum dolor sit amet',
			'modify_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
