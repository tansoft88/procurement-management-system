<?php
App::uses('VerificationRate', 'Model');

/**
 * VerificationRate Test Case
 *
 */
class VerificationRateTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.verification_rate', 'app.billing_mode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VerificationRate = ClassRegistry::init('VerificationRate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VerificationRate);

		parent::tearDown();
	}

}
