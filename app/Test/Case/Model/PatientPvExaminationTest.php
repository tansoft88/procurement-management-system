<?php
App::uses('PatientPvExamination', 'Model');

/**
 * PatientPvExamination Test Case
 *
 */
class PatientPvExaminationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_pv_examination', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.patient_presenting_complaint', 'app.physical_visual_examination');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientPvExamination = ClassRegistry::init('PatientPvExamination');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientPvExamination);

		parent::tearDown();
	}

}
