<?php
App::uses('RequestLog', 'Model');

/**
 * RequestLog Test Case
 *
 */
class RequestLogTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.request_log', 'app.problem_type', 'app.problem_category', 'app.status', 'app.agent_detail', 'app.department', 'app.employee_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequestLog = ClassRegistry::init('RequestLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequestLog);

		parent::tearDown();
	}

}
