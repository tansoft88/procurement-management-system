<?php
App::uses('TenderCategory', 'Model');

/**
 * TenderCategory Test Case
 *
 */
class TenderCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tender_category', 'app.supplier_detail', 'app.tender_response', 'app.tender_request');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TenderCategory = ClassRegistry::init('TenderCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TenderCategory);

		parent::tearDown();
	}

}
