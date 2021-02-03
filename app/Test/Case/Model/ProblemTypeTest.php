<?php
App::uses('ProblemType', 'Model');

/**
 * ProblemType Test Case
 *
 */
class ProblemTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.problem_type', 'app.request_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProblemType = ClassRegistry::init('ProblemType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProblemType);

		parent::tearDown();
	}

}
