<?php
App::uses('QuotationResponse', 'Model');

/**
 * QuotationResponse Test Case
 *
 */
class QuotationResponseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.quotation_response');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuotationResponse = ClassRegistry::init('QuotationResponse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuotationResponse);

		parent::tearDown();
	}

}
