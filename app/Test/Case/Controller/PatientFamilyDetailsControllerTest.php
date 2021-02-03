<?php
App::uses('PatientFamilyDetailsController', 'Controller');

/**
 * TestPatientFamilyDetailsController *
 */
class TestPatientFamilyDetailsController extends PatientFamilyDetailsController {
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
 * PatientFamilyDetailsController Test Case
 *
 */
class PatientFamilyDetailsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_family_detail', 'app.blood_group', 'app.patient_detail', 'app.employer', 'app.employment_type', 'app.marital_statu', 'app.medical_aid', 'app.student_detail', 'app.halls_of_residence', 'app.programme', 'app.programme_subtype', 'app.programmes_type', 'app.faculty', 'app.faculty_sub_category', 'app.fee', 'app.exam_multicourse_paper', 'app.department', 'app.programme_fee', 'app.sem_programme_fee', 'app.department_deadline', 'app.exam_faculty_test_venue', 'app.accommodation_revoking_faculty_exception', 'app.applicant_alevel_qualification', 'app.student_exam_history', 'app.graduants_register', 'app.antiplagiarism', 'app.degree_class_requirement', 'app.programme_choice_subject', 'app.exam_board_paper', 'app.faculty_regulation', 'app.exam_case_record', 'app.programme_requirement', 'app.programme_requirements_subject', 'app.programme_subject', 'app.structure_programme_requirements_subject', 'app.specialisation', 'app.programme_choice', 'app.course_fee', 'app.student_exam_result', 'app.course', 'app.student_register', 'app.overall_decision', 'app.student_register_history', 'app.programme_course_limit', 'app.student_assignment', 'app.student_overall_decision', 'app.degree_subject', 'app.allocation_priority', 'app.specialised_programme', 'app.accommodation_revoking_programme_exception', 'app.registration_course_fee', 'app.patient_bank_detail', 'app.bank', 'app.patient_observation', 'app.episode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientFamilyDetails = new TestPatientFamilyDetailsController();
		$this->PatientFamilyDetails->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientFamilyDetails);

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
