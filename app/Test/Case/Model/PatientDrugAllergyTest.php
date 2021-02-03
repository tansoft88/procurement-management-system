<?php
App::uses('PatientDrugAllergy', 'Model');

/**
 * PatientDrugAllergy Test Case
 *
 */
class PatientDrugAllergyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_drug_allergy', 'app.drug_allergy', 'app.patient');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientDrugAllergy = ClassRegistry::init('PatientDrugAllergy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientDrugAllergy);

		parent::tearDown();
	}

}
