<?php
App::uses('QuotationRequestStatus', 'Model');

/**
 * QuotationRequestStatus Test Case
 *
 */
class QuotationRequestStatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.quotation_request_status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuotationRequestStatus = ClassRegistry::init('QuotationRequestStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuotationRequestStatus);

		parent::tearDown();
	}

}
