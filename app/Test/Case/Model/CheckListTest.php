<?php
App::uses('CheckList', 'Model');

/**
 * CheckList Test Case
 *
 */
class CheckListTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.check_list', 'app.vehicle');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CheckList = ClassRegistry::init('CheckList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CheckList);

		parent::tearDown();
	}

}
