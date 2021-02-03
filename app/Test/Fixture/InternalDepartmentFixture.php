<?php
/**
 * InternalDepartmentFixture
 *
 */
class InternalDepartmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'department_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'department_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_by' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 100),
		'create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'department_code' => array('column' => 'department_code', 'unique' => 1)),
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
			'department_code' => 'Lorem ipsum dolor ',
			'department_name' => 'Lorem ipsum dolor sit amet',
			'active' => 1,
			'created' => 1490162814,
			'modified' => 1490162814,
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified_by' => 1,
			'create_ip' => 'Lorem ipsum dolor sit amet',
			'modify_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
