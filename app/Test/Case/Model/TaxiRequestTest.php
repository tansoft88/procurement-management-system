<?php
App::uses('TaxiRequest', 'Model');

/**
 * TaxiRequest Test Case
 *
 */
class TaxiRequestTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.taxi_request', 'app.request_status', 'app.employee', 'app.department', 'app.location_distance', 'app.taxi_detail', 'app.taxi_rate');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxiRequest = ClassRegistry::init('TaxiRequest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxiRequest);

		parent::tearDown();
	}

}
