<?php
App::uses('HallsOfResidence', 'Model');

/**
 * HallsOfResidence Test Case
 *
 */
class HallsOfResidenceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.halls_of_residence');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HallsOfResidence = ClassRegistry::init('HallsOfResidence');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HallsOfResidence);

		parent::tearDown();
	}

}
