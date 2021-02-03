<?php
App::uses('BlacklistReversalReason', 'Model');

/**
 * BlacklistReversalReason Test Case
 *
 */
class BlacklistReversalReasonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.blacklist_reversal_reason', 'app.supplier_blacklist');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BlacklistReversalReason = ClassRegistry::init('BlacklistReversalReason');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BlacklistReversalReason);

		parent::tearDown();
	}

}
