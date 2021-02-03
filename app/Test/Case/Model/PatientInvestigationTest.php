<?php
App::uses('PatientInvestigation', 'Model');

/**
 * PatientInvestigation Test Case
 *
 */
class PatientInvestigationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_investigation', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_presenting_complaint', 'app.investigation_category_type', 'app.investigation_category', 'app.investigation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientInvestigation = ClassRegistry::init('PatientInvestigation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientInvestigation);

		parent::tearDown();
	}

}
