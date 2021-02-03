<?php
App::uses('BankAccountType', 'Model');

/**
 * BankAccountType Test Case
 *
 */
class BankAccountTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.bank_account_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BankAccountType = ClassRegistry::init('BankAccountType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BankAccountType);

		parent::tearDown();
	}

}
