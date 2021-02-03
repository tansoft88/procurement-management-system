<?php
App::uses('TaxiDetail', 'Model');

/**
 * TaxiDetail Test Case
 *
 */
class TaxiDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.taxi_detail', 'app.taxi_rate');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxiDetail = ClassRegistry::init('TaxiDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxiDetail);

		parent::tearDown();
	}

}
