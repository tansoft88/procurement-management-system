<?php
App::uses('Employer', 'Model');

/**
 * Employer Test Case
 *
 */
class EmployerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employer', 'app.patient_detail', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employer = ClassRegistry::init('Employer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employer);

		parent::tearDown();
	}

}
