<?php
App::uses('PatientSocialHistory', 'Model');

/**
 * PatientSocialHistory Test Case
 *
 */
class PatientSocialHistoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_social_history');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientSocialHistory = ClassRegistry::init('PatientSocialHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientSocialHistory);

		parent::tearDown();
	}

}
