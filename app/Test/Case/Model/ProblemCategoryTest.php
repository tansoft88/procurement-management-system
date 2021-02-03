<?php
App::uses('ProblemCategory', 'Model');

/**
 * ProblemCategory Test Case
 *
 */
class ProblemCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.problem_category', 'app.request_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProblemCategory = ClassRegistry::init('ProblemCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProblemCategory);

		parent::tearDown();
	}

}
