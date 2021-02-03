<?php
App::uses('SupplierBlacklist', 'Model');

/**
 * SupplierBlacklist Test Case
 *
 */
class SupplierBlacklistTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supplier_blacklist', 'app.blacklist_reason', 'app.blacklist_reversal_reason');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierBlacklist = ClassRegistry::init('SupplierBlacklist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierBlacklist);

		parent::tearDown();
	}

}
