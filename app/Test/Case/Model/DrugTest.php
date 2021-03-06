<?php
App::uses('Drug', 'Model');

/**
 * Drug Test Case
 *
 */
class DrugTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.drug', 'app.category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Drug = ClassRegistry::init('Drug');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Drug);

		parent::tearDown();
	}

}
