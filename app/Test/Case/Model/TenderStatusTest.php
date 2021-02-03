<?php
App::uses('TenderStatus', 'Model');

/**
 * TenderStatus Test Case
 *
 */
class TenderStatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tender_status', 'app.tender_request', 'app.tender_category', 'app.supplier_detail', 'app.tender_response');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TenderStatus = ClassRegistry::init('TenderStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TenderStatus);

		parent::tearDown();
	}

}
