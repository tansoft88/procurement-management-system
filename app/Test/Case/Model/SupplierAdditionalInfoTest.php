<?php
App::uses('SupplierAdditionalInfo', 'Model');

/**
 * SupplierAdditionalInfo Test Case
 *
 */
class SupplierAdditionalInfoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supplier_additional_info');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierAdditionalInfo = ClassRegistry::init('SupplierAdditionalInfo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierAdditionalInfo);

		parent::tearDown();
	}

}
