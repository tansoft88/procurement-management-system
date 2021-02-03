<?php
App::uses('PatientDetail', 'Model');

/**
 * PatientDetail Test Case
 *
 */
class PatientDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.medical_aid', 'app.blood_group', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientDetail = ClassRegistry::init('PatientDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientDetail);

		parent::tearDown();
	}

}
