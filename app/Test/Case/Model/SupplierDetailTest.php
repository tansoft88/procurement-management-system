<?php
App::uses('SupplierDetail', 'Model');

/**
 * SupplierDetail Test Case
 *
 */
class SupplierDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supplier_detail', 'app.tender_category', 'app.tender_response');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierDetail = ClassRegistry::init('SupplierDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierDetail);

		parent::tearDown();
	}

}
