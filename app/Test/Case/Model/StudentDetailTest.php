<?php
App::uses('StudentDetail', 'Model');

/**
 * StudentDetail Test Case
 *
 */
class StudentDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.student_detail', 'app.programme', 'app.department', 'app.book', 'app.publisher', 'app.stack_room', 'app.status', 'app.student_borrowing', 'app.student', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StudentDetail = ClassRegistry::init('StudentDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StudentDetail);

		parent::tearDown();
	}

}
