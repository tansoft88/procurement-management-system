<?php
App::uses('Book', 'Model');

/**
 * Book Test Case
 *
 */
class BookTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.book', 'app.publisher', 'app.department', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.stack_room', 'app.status', 'app.student_borrowing');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Book = ClassRegistry::init('Book');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Book);

		parent::tearDown();
	}

}
