<?php
App::uses('QuotationRequest', 'Model');

/**
 * QuotationRequest Test Case
 *
 */
class QuotationRequestTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.quotation_request');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuotationRequest = ClassRegistry::init('QuotationRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuotationRequest);

		parent::tearDown();
	}

}
