<?php
App::uses('StudentBorrowing', 'Model');

/**
 * StudentBorrowing Test Case
 *
 */
class StudentBorrowingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.student_borrowing', 'app.student', 'app.book', 'app.publisher', 'app.department', 'app.programme', 'app.student_detail', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.stack_room', 'app.status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentBorrowing = ClassRegistry::init('StudentBorrowing');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentBorrowing);

		parent::tearDown();
	}

}
