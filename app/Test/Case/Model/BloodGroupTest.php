<?php
App::uses('BloodGroup', 'Model');

/**
 * BloodGroup Test Case
 *
 */
class BloodGroupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.blood_group', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BloodGroup = ClassRegistry::init('BloodGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BloodGroup);

		parent::tearDown();
	}

}
