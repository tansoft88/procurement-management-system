<?php
/**
 * SupplierCategoryFixture
 *
 */
class SupplierCategoryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'supplier_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'tender_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_supply_sub_category' => array('column' => 'tender_category_id', 'unique' => 0), 'fk_supply_master_category' => array('column' => 'supplier_detail_id', 'unique' => 0)),
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
			'supplier_detail_id' => 1,
			'tender_category_id' => 1
		),
	);
}
