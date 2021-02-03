<?php
App::uses('SuspendedStudent', 'Model');

/**
 * SuspendedStudent Test Case
 *
 */
class SuspendedStudentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.suspended_student', 'app.student_detail', 'app.programme', 'app.department', 'app.book', 'app.publisher', 'app.stack_room', 'app.status', 'app.student_borrowing', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.suspension_reason');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SuspendedStudent = ClassRegistry::init('SuspendedStudent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SuspendedStudent);

		parent::tearDown();
	}

}
