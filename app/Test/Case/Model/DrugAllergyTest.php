<?php
App::uses('DrugAllergy', 'Model');

/**
 * DrugAllergy Test Case
 *
 */
class DrugAllergyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.drug_allergy', 'app.patient', 'app.patient_drug_allergy');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DrugAllergy = ClassRegistry::init('DrugAllergy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DrugAllergy);

		parent::tearDown();
	}

}
