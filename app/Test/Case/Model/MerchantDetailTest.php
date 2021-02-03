<?php
App::uses('MerchantDetail', 'Model');

/**
 * MerchantDetail Test Case
 *
 */
class MerchantDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.merchant_detail', 'app.operating_district', 'app.query_log', 'app.techinician_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MerchantDetail = ClassRegistry::init('MerchantDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MerchantDetail);

		parent::tearDown();
	}

}
