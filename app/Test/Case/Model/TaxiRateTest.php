<?php
App::uses('TaxiRate', 'Model');

/**
 * TaxiRate Test Case
 *
 */
class TaxiRateTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.taxi_rate');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxiRate = ClassRegistry::init('TaxiRate');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxiRate);

		parent::tearDown();
	}

}
