<?php
App::uses('SupplierRating', 'Model');

/**
 * SupplierRating Test Case
 *
 */
class SupplierRatingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.supplier_rating');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SupplierRating = ClassRegistry::init('SupplierRating');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SupplierRating);

		parent::tearDown();
	}

}
