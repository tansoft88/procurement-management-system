<?php
/**
 * FileUploadFixture
 *
 */
class FileUploadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'filename' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'client_organization_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'md5_hash' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'no_of_candidates' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'no_of_centers' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'number_of_sessions' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'total_subjects' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'amount_due' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'statu_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'uploaded_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'approved_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'verified_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'approval_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'verification_timestamp' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'upload_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'approval_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'verification_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 16, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'filename' => 'Lorem ipsum dolor sit amet',
			'client_organization_id' => 'Lorem ipsum d',
			'md5_hash' => 'Lorem ipsum dolor sit amet',
			'no_of_candidates' => 1,
			'no_of_centers' => 1,
			'number_of_sessions' => 1,
			'total_subjects' => 1,
			'amount_due' => 1,
			'statu_id' => 1,
			'uploaded_by' => 'Lorem ipsum dolor sit amet',
			'approved_by' => 'Lorem ipsum dolor sit amet',
			'verified_by' => 'Lorem ipsum dolor sit amet',
			'created' => 1432199788,
			'approval_timestamp' => 1432199788,
			'verification_timestamp' => 1432199788,
			'upload_ip' => 'Lorem ipsum do',
			'approval_ip' => 'Lorem ipsum do',
			'verification_ip' => 'Lorem ipsum do'
		),
	);
}
