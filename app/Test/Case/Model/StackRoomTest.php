<?php
App::uses('StackRoom', 'Model');

/**
 * StackRoom Test Case
 *
 */
class StackRoomTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.stack_room', 'app.book', 'app.publisher', 'app.department', 'app.programme', 'app.student_detail', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.status', 'app.student_borrowing');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StackRoom = ClassRegistry::init('StackRoom');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StackRoom);

		parent::tearDown();
	}

}
