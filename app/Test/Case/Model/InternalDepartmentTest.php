<?php
App::uses('InternalDepartment', 'Model');

/**
 * InternalDepartment Test Case
 *
 */
class InternalDepartmentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.internal_department');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InternalDepartment = ClassRegistry::init('InternalDepartment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InternalDepartment);

		parent::tearDown();
	}

}
