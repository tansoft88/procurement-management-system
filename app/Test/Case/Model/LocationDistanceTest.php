<?php
App::uses('LocationDistance', 'Model');

/**
 * LocationDistance Test Case
 *
 */
class LocationDistanceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.location_distance');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LocationDistance = ClassRegistry::init('LocationDistance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LocationDistance);

		parent::tearDown();
	}

}
