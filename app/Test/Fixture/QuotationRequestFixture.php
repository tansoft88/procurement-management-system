<?php
/**
 * QuotationRequestFixture
 *
 */
class QuotationRequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'request_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_specification' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'due_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'override_rqrd_responses' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'override_reason' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'extended_due_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'reason_for_extension' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'quotation_status_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reason_for_rejecting_request' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'request_endorsed_rejected' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'request_created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_endorsed_rejected_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'request_modify_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'response_override_created' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'response_override_created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'response_override_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'due_date_extension_created' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'date_extension_created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_extension_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'request_code' => array('column' => 'request_code', 'unique' => 1), 'quotation_status_code' => array('column' => 'quotation_status_code', 'unique' => 0)),
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
			'request_code' => 'Lorem ipsum dolor sit amet',
			'request_title' => 'Lorem ipsum dolor sit amet',
			'request_specification' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'due_date' => '2017-03-22 07:07:27',
			'override_rqrd_responses' => 1,
			'override_reason' => 'Lorem ipsum dolor sit amet',
			'extended_due_date' => '2017-03-22 07:07:27',
			'reason_for_extension' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'quotation_status_code' => 'Lorem ip',
			'reason_for_rejecting_request' => 'Lorem ipsum dolor sit amet',
			'request_created' => 1490162847,
			'request_endorsed_rejected' => 1490162847,
			'request_created_by' => 'Lorem ipsum dolor sit amet',
			'request_endorsed_rejected_by' => 'Lorem ipsum dolor sit amet',
			'request_create_ip' => 'Lorem ipsum dolor sit amet',
			'request_modify_ip' => 'Lorem ipsum dolor sit amet',
			'response_override_created' => 1490162847,
			'response_override_created_by' => 'Lorem ipsum dolor sit amet',
			'response_override_ip' => 'Lorem ipsum dolor sit amet',
			'due_date_extension_created' => 1490162847,
			'date_extension_created_by' => 'Lorem ipsum dolor sit amet',
			'date_extension_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
