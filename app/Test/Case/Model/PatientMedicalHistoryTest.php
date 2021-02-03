<?php
App::uses('PatientMedicalHistory', 'Model');

/**
 * PatientMedicalHistory Test Case
 *
 */
class PatientMedicalHistoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_medical_history');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientMedicalHistory = ClassRegistry::init('PatientMedicalHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientMedicalHistory);

		parent::tearDown();
	}

}
