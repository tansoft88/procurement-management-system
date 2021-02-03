<?php
App::uses('PatientRemindersController', 'Controller');

/**
 * TestPatientRemindersController *
 */
class TestPatientRemindersController extends PatientRemindersController {
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
 * PatientRemindersController Test Case
 *
 */
class PatientRemindersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_reminder', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.investigation_category_type', 'app.investigation_category', 'app.category_type', 'app.investigation_type', 'app.patient_presenting_complaint', 'app.patient_pv_examination', 'app.physical_visual_examination');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientReminders = new TestPatientRemindersController();
		$this->PatientReminders->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientReminders);

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
