<?php
App::uses('SalesOrder', 'Model');

/**
 * SalesOrder Test Case
 *
 */
class SalesOrderTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.sales_order', 'app.vehicle', 'app.customer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SalesOrder = ClassRegistry::init('SalesOrder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SalesOrder);

		parent::tearDown();
	}

}
