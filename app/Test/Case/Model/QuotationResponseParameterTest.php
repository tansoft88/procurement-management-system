<?php
App::uses('QuotationResponseParameter', 'Model');

/**
 * QuotationResponseParameter Test Case
 *
 */
class QuotationResponseParameterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.quotation_response_parameter');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuotationResponseParameter = ClassRegistry::init('QuotationResponseParameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuotationResponseParameter);

		parent::tearDown();
	}

}
