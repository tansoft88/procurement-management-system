<?php
App::uses('PasswordParameter', 'Model');

/**
 * PasswordParameter Test Case
 *
 */
class PasswordParameterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.password_parameter');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PasswordParameter = ClassRegistry::init('PasswordParameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PasswordParameter);

		parent::tearDown();
	}

}
