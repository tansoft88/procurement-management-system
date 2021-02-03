<?php
App::uses('PatientEncounter', 'Model');

/**
 * PatientEncounter Test Case
 *
 */
class PatientEncounterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.patient_presenting_complaint');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientEncounter = ClassRegistry::init('PatientEncounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientEncounter);

		parent::tearDown();
	}

}
