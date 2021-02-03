<?php
App::uses('Publisher', 'Model');

/**
 * Publisher Test Case
 *
 */
class PublisherTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.publisher', 'app.book', 'app.department', 'app.programme', 'app.student_detail', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.stack_room', 'app.status', 'app.student_borrowing');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Publisher = ClassRegistry::init('Publisher');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Publisher);

		parent::tearDown();
	}

}
