<?php
App::uses('SuspensionReasonsController', 'Controller');

/**
 * TestSuspensionReasonsController *
 */
class TestSuspensionReasonsController extends SuspensionReasonsController {
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
 * SuspensionReasonsController Test Case
 *
 */
class SuspensionReasonsControllerTestCase extends CakeTestCase {
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
		$this->SuspensionReasons = new TestSuspensionReasonsController();
		$this->SuspensionReasons->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SuspensionReasons);

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
