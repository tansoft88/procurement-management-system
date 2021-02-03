<?php
App::uses('PatientDiagnosi', 'Model');

/**
 * PatientDiagnosi Test Case
 *
 */
class PatientDiagnosiTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_diagnosi', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.investigation_category_type', 'app.investigation_category', 'app.category_type', 'app.investigation_type', 'app.patient_presenting_complaint', 'app.patient_pv_examination', 'app.physical_visual_examination', 'app.disease_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientDiagnosi = ClassRegistry::init('PatientDiagnosi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientDiagnosi);

		parent::tearDown();
	}

}
