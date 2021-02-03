<?php
App::uses('EmployeeDetail', 'Model');

/**
 * EmployeeDetail Test Case
 *
 */
class EmployeeDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employee_detail', 'app.department', 'app.request_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployeeDetail = ClassRegistry::init('EmployeeDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployeeDetail);

		parent::tearDown();
	}

}
