<?php
App::uses('University', 'Model');

/**
 * University Test Case
 *
 */
class UniversityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.university');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->University = ClassRegistry::init('University');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->University);

		parent::tearDown();
	}

}
