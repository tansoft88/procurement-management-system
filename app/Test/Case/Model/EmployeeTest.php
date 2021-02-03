<?php
App::uses('Employee', 'Model');

/**
 * Employee Test Case
 *
 */
class EmployeeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employee', 'app.department', 'app.location_distance');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employee = ClassRegistry::init('Employee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employee);

		parent::tearDown();
	}

}
