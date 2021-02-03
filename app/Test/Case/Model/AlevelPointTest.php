<?php
App::uses('AlevelPoint', 'Model');

/**
 * AlevelPoint Test Case
 *
 */
class AlevelPointTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alevel_point', 'app.user', 'app.system_group', 'app.user_role');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlevelPoint = ClassRegistry::init('AlevelPoint');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlevelPoint);

		parent::tearDown();
	}

}
