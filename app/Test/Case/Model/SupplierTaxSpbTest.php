<?php
App::uses('SupplierTaxSpb', 'Model');

/**
 * SupplierTaxSpb Test Case
 *
 */
class SupplierTaxSpbTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supplier_tax_spb');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierTaxSpb = ClassRegistry::init('SupplierTaxSpb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierTaxSpb);

		parent::tearDown();
	}

}
