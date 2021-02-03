<?php
App::uses('PatientBankDetail', 'Model');

/**
 * PatientBankDetail Test Case
 *
 */
class PatientBankDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_bank_detail', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_observation', 'app.episode', 'app.bank');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientBankDetail = ClassRegistry::init('PatientBankDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientBankDetail);

		parent::tearDown();
	}

}
