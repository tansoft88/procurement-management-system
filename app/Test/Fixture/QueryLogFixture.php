<?php
/**
 * QueryLogFixture
 *
 */
class QueryLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'query_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'merchant_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'technician_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'query_type_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'status_id' => 1,
			'created' => '2019-04-12 13:25:40',
			'modified' => '2019-04-12 13:25:40',
			'merchant_detail_id' => 1,
			'technician_detail_id' => 1,
			'operating_district_id' => 1
		),
	);
}
