<?php
App::uses('InternalUserDepartment', 'Model');

/**
 * InternalUserDepartment Test Case
 *
 */
class InternalUserDepartmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.internal_user_department');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InternalUserDepartment = ClassRegistry::init('InternalUserDepartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InternalUserDepartment);

		parent::tearDown();
	}

}
