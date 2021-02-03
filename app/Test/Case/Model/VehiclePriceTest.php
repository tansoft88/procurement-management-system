<?php
App::uses('VehiclePrice', 'Model');

/**
 * VehiclePrice Test Case
 *
 */
class VehiclePriceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.vehicle_price', 'app.vehicle', 'app.check_list', 'app.sales_order', 'app.customer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->VehiclePrice = ClassRegistry::init('VehiclePrice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->VehiclePrice);

		parent::tearDown();
	}

}
