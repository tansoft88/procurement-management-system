<?php
App::uses('DoctorMedicalSpecialitiesController', 'Controller');

/**
 * TestDoctorMedicalSpecialitiesController *
 */
class TestDoctorMedicalSpecialitiesController extends DoctorMedicalSpecialitiesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * DoctorMedicalSpecialitiesController Test Case
 *
 */
class DoctorMedicalSpecialitiesControllerTestCase extends CakeTestCase {
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
		$this->DoctorMedicalSpecialities = new TestDoctorMedicalSpecialitiesController();
		$this->DoctorMedicalSpecialities->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctorMedicalSpecialities);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
}
