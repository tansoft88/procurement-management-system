<?php
App::uses('SystemGroup', 'Model');

/**
 * SystemGroup Test Case
 *
 */
class SystemGroupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.system_group', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SystemGroup = ClassRegistry::init('SystemGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SystemGroup);

		parent::tearDown();
	}

}
