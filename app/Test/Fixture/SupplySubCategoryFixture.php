<?php
/**
 * SupplySubCategoryFixture
 *
 */
class SupplySubCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'supply_master_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sub_category_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'modified' => array('type' => 'timestamp', 'null' => true, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified_by' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'create_ip' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modify_ip' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_supply_master_category' => array('column' => 'supply_master_category_id', 'unique' => 0)),
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
			'supply_master_category_id' => 1,
			'sub_category_name' => 'Lorem ipsum dolor sit amet',
			'created' => 1490169745,
			'modified' => 1490169745,
			'created_by' => 'Lorem ipsum dolor sit amet',
			'modified_by' => 'Lorem ipsum dolor sit amet',
			'create_ip' => 'Lorem ipsum dolor sit amet',
			'modify_ip' => 'Lorem ipsum dolor sit amet'
		),
	);
}
