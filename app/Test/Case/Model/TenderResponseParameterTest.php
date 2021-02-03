<?php
App::uses('TenderResponseParameter', 'Model');

/**
 * TenderResponseParameter Test Case
 *
 */
class TenderResponseParameterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tender_response_parameter');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TenderResponseParameter = ClassRegistry::init('TenderResponseParameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TenderResponseParameter);

		parent::tearDown();
	}

}
