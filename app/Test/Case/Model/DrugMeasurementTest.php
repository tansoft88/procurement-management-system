<?php
App::uses('DrugMeasurement', 'Model');

/**
 * DrugMeasurement Test Case
 *
 */
class DrugMeasurementTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.drug_measurement', 'app.patient_prescription');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DrugMeasurement = ClassRegistry::init('DrugMeasurement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DrugMeasurement);

		parent::tearDown();
	}

}
