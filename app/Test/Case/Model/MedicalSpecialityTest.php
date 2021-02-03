<?php
App::uses('MedicalSpeciality', 'Model');

/**
 * MedicalSpeciality Test Case
 *
 */
class MedicalSpecialityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.medical_speciality', 'app.doctor', 'app.doctor_medical_speciality');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedicalSpeciality = ClassRegistry::init('MedicalSpeciality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedicalSpeciality);

		parent::tearDown();
	}

}
