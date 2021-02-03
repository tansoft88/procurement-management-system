<?php
App::uses('TechinicianDetail', 'Model');

/**
 * TechinicianDetail Test Case
 *
 */
class TechinicianDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.techinician_detail', 'app.department', 'app.operating_district', 'app.merchant_detail', 'app.query_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TechinicianDetail = ClassRegistry::init('TechinicianDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TechinicianDetail);

		parent::tearDown();
	}

}
