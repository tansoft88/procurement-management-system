<?php
App::uses('Programme', 'Model');

/**
 * Programme Test Case
 *
 */
class ProgrammeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.programme', 'app.department', 'app.book', 'app.publisher', 'app.stack_room', 'app.status', 'app.student_borrowing', 'app.user', 'app.system_group', 'app.user_role', 'app.request_log', 'app.student_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Programme = ClassRegistry::init('Programme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Programme);

		parent::tearDown();
	}

}
