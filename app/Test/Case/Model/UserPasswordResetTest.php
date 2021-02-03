<?php
App::uses('UserPasswordReset', 'Model');

/**
 * UserPasswordReset Test Case
 *
 */
class UserPasswordResetTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_password_reset');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserPasswordReset = ClassRegistry::init('UserPasswordReset');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserPasswordReset);

		parent::tearDown();
	}

}
