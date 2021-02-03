<?php
App::uses('MedicalAidsController', 'Controller');

/**
 * TestMedicalAidsController *
 */
class TestMedicalAidsController extends MedicalAidsController {
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
 * MedicalAidsController Test Case
 *
 */
class MedicalAidsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.medical_aid', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.blood_group', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode', 'app.student_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MedicalAids = new TestMedicalAidsController();
		$this->MedicalAids->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MedicalAids);

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
