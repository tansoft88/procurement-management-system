<?php
App::uses('Vehicle', 'Model');

/**
 * Vehicle Test Case
 *
 */
class VehicleTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vehicle', 'app.check_list', 'app.sales_order', 'app.customer', 'app.vehicle_price');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vehicle = ClassRegistry::init('Vehicle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vehicle);

		parent::tearDown();
	}

}
