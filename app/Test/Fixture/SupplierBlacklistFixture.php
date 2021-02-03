<?php
/**
 * SupplierBlacklistFixture
 *
 */
class SupplierBlacklistFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'supplier_email_addess' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'blacklist_reason_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'blacklisting_reversed' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'date_of_reversal' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'blacklist_reversal_reason_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reversal_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'reversed_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reversal_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'supplier_email_addess' => array('column' => 'supplier_email_addess', 'unique' => 0), 'fk_blacklist_reason' => array('column' => 'blacklist_reason_id', 'unique' => 0), 'fk_blacklist_reversal_reason' => array('column' => 'blacklist_reversal_reason_id', 'unique' => 0)),
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
			'supplier_email_addess' => 'Lorem ipsum dolor sit amet',
			'blacklist_reason_id' => 1,
			'blacklisting_reversed' => 1,
			'date_of_reversal' => '2017-03-22',
			'blacklist_reversal_reason_id' => 1,
			'created' => 1490162890,
			'modified' => 1490162890,
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'create_ip' => 'Lorem ipsum dolor sit amet',
			'modify_ip' => 'Lorem ipsum dolor sit amet',
			'reversal_timestamp' => 1490162890,
			'reversed_by' => 'Lorem ipsum dolor sit amet',
			'reversal_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
