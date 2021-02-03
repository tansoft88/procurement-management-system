<?php
App::uses('EmploymentType', 'Model');

/**
 * EmploymentType Test Case
 *
 */
class EmploymentTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employment_type', 'app.patient_detail', 'app.employer', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmploymentType = ClassRegistry::init('EmploymentType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmploymentType);

		parent::tearDown();
	}

}
