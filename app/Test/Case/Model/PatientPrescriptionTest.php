<?php
App::uses('PatientPrescription', 'Model');

/**
 * PatientPrescription Test Case
 *
 */
class PatientPrescriptionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_prescription', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.investigation_category_type', 'app.investigation_category', 'app.category_type', 'app.investigation_type', 'app.patient_presenting_complaint', 'app.patient_pv_examination', 'app.physical_visual_examination', 'app.drug_type', 'app.drug_measurement', 'app.drug_dosage_frequency');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientPrescription = ClassRegistry::init('PatientPrescription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientPrescription);

		parent::tearDown();
	}

}
