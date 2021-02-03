<?php
App::uses('Faculty', 'Model');

/**
 * Faculty Test Case
 *
 */
class FacultyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.faculty');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Faculty = ClassRegistry::init('Faculty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Faculty);

		parent::tearDown();
	}

}
