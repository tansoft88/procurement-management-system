<?php
App::uses('DrugDosageFrequency', 'Model');

/**
 * DrugDosageFrequency Test Case
 *
 */
class DrugDosageFrequencyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.drug_dosage_frequency', 'app.patient_prescription');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DrugDosageFrequency = ClassRegistry::init('DrugDosageFrequency');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DrugDosageFrequency);

		parent::tearDown();
	}

}
