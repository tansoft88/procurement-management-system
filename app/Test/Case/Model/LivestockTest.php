<?php
App::uses('Livestock', 'Model');

/**
 * Livestock Test Case
 *
 */
class LivestockTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.livestock');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Livestock = ClassRegistry::init('Livestock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Livestock);

		parent::tearDown();
	}

}
