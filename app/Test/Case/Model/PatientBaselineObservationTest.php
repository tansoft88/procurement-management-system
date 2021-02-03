<?php
App::uses('PatientBaselineObservation', 'Model');

/**
 * PatientBaselineObservation Test Case
 *
 */
class PatientBaselineObservationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_baseline_observation', 'app.patient_encounter', 'app.patient_investigation', 'app.patient_presenting_complaint');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientBaselineObservation = ClassRegistry::init('PatientBaselineObservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientBaselineObservation);

		parent::tearDown();
	}

}
