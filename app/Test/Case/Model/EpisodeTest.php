<?php
App::uses('Episode', 'Model');

/**
 * Episode Test Case
 *
 */
class EpisodeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.episode', 'app.patient_observation', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Episode = ClassRegistry::init('Episode');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Episode);

		parent::tearDown();
	}

}
