<?php
App::uses('BlacklistReason', 'Model');

/**
 * BlacklistReason Test Case
 *
 */
class BlacklistReasonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.blacklist_reason', 'app.supplier_blacklist');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BlacklistReason = ClassRegistry::init('BlacklistReason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BlacklistReason);

		parent::tearDown();
	}

}
