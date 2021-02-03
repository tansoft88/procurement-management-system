<?php
App::uses('SupplySubCategory', 'Model');

/**
 * SupplySubCategory Test Case
 *
 */
class SupplySubCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supply_sub_category', 'app.supply_master_category', 'app.supplier_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplySubCategory = ClassRegistry::init('SupplySubCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplySubCategory);

		parent::tearDown();
	}

}
