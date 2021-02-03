<?php
App::uses('PatientPresentingComplaint', 'Model');

/**
 * PatientPresentingComplaint Test Case
 *
 */
class PatientPresentingComplaintTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_presenting_complaint', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientPresentingComplaint = ClassRegistry::init('PatientPresentingComplaint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientPresentingComplaint);

		parent::tearDown();
	}

}
