<?php
App::uses('PatientSurgicalHistory', 'Model');

/**
 * PatientSurgicalHistory Test Case
 *
 */
class PatientSurgicalHistoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_surgical_history', 'app.operation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientSurgicalHistory = ClassRegistry::init('PatientSurgicalHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientSurgicalHistory);

		parent::tearDown();
	}

}
