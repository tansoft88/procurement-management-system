<?php
App::uses('SupplyMasterCategory', 'Model');

/**
 * SupplyMasterCategory Test Case
 *
 */
class SupplyMasterCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supply_master_category', 'app.supplier_category', 'app.supply_sub_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplyMasterCategory = ClassRegistry::init('SupplyMasterCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplyMasterCategory);

		parent::tearDown();
	}

}
