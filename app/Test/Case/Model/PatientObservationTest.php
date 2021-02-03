<?php
App::uses('PatientObservation', 'Model');

/**
 * PatientObservation Test Case
 *
 */
class PatientObservationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_observation', 'app.episode', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientObservation = ClassRegistry::init('PatientObservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientObservation);

		parent::tearDown();
	}

}
