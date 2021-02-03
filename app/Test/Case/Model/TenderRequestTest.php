<?php
App::uses('TenderRequest', 'Model');

/**
 * TenderRequest Test Case
 *
 */
class TenderRequestTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tender_request', 'app.tender_category', 'app.supplier_detail', 'app.tender_response', 'app.tender_status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TenderRequest = ClassRegistry::init('TenderRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TenderRequest);

		parent::tearDown();
	}

}
