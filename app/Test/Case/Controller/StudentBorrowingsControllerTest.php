<?php
App::uses('StudentBorrowingsController', 'Controller');

/**
 * TestStudentBorrowingsController *
 */
class TestStudentBorrowingsController extends StudentBorrowingsController {
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
 * StudentBorrowingsController Test Case
 *
 */
class StudentBorrowingsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.student_borrowing', 'app.student_detail', 'app.programme', 'app.department', 'app.book', 'app.publisher', 'app.stack_room', 'app.status', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.suspended_student');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentBorrowings = new TestStudentBorrowingsController();
		$this->StudentBorrowings->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentBorrowings);

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
