<?php
App::uses('DoctorMedicalSpeciality', 'Model');

/**
 * DoctorMedicalSpeciality Test Case
 *
 */
class DoctorMedicalSpecialityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.doctor_medical_speciality', 'app.medical_speciality', 'app.doctor');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DoctorMedicalSpeciality = ClassRegistry::init('DoctorMedicalSpeciality');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctorMedicalSpeciality);

		parent::tearDown();
	}

}
