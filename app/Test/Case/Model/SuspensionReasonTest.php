<?php
App::uses('SuspensionReason', 'Model');

/**
 * SuspensionReason Test Case
 *
 */
class SuspensionReasonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.suspension_reason', 'app.suspended_student', 'app.student_detail', 'app.programme', 'app.department', 'app.book', 'app.publisher', 'app.stack_room', 'app.status', 'app.student_borrowing', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SuspensionReason = ClassRegistry::init('SuspensionReason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SuspensionReason);

		parent::tearDown();
	}

}
