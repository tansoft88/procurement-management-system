<?php
App::uses('Bank', 'Model');

/**
 * Bank Test Case
 *
 */
class BankTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.bank', 'app.patient_bank_detail', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bank = ClassRegistry::init('Bank');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bank);

		parent::tearDown();
	}

}
