<?php
App::uses('Status', 'Model');

/**
 * Status Test Case
 *
 */
class StatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.status', 'app.book', 'app.publisher', 'app.department', 'app.programme', 'app.student_detail', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.stack_room', 'app.student_borrowing');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Status = ClassRegistry::init('Status');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Status);

		parent::tearDown();
	}

}
