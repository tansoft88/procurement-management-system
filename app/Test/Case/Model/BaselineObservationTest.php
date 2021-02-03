<?php
App::uses('BaselineObservation', 'Model');

/**
 * BaselineObservation Test Case
 *
 */
class BaselineObservationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.baseline_observation', 'app.patient', 'app.patient_baseline_observation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BaselineObservation = ClassRegistry::init('BaselineObservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BaselineObservation);

		parent::tearDown();
	}

}
