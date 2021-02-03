<?php
App::uses('MedicalAid', 'Model');

/**
 * MedicalAid Test Case
 *
 */
class MedicalAidTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.medical_aid', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode', 'app.student_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedicalAid = ClassRegistry::init('MedicalAid');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedicalAid);

		parent::tearDown();
	}

}
