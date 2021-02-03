<?php
App::uses('OperatingDistrict', 'Model');

/**
 * OperatingDistrict Test Case
 *
 */
class OperatingDistrictTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.operating_district', 'app.merchant_detail', 'app.query_log', 'app.techinician_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperatingDistrict = ClassRegistry::init('OperatingDistrict');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperatingDistrict);

		parent::tearDown();
	}

}
