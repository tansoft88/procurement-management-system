<?php
/**
 * RequestLogFixture
 *
 */
class RequestLogFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'problem_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'problem_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'customer_mobile' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'customer_fullname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'agent_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'department_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'feedback' => array('type' => 'string', 'null' => true, 'default' => 'N/A', 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'problem_type_id' => 1,
			'problem_category_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'status_id' => 1,
			'created' => '2019-10-03 19:57:17',
			'modified' => '2019-10-03 19:57:17',
			'customer_mobile' => 1,
			'customer_fullname' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'agent_detail_id' => 1,
			'department_id' => 1,
			'feedback' => 'Lorem ipsum dolor sit amet'
		),
	);
}
