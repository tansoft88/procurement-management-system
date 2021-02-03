<?php
App::uses('TechnicianDetail', 'Model');

/**
 * TechnicianDetail Test Case
 *
 */
class TechnicianDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.technician_detail', 'app.department', 'app.techinician_detail', 'app.operating_district', 'app.merchant_detail', 'app.query_log', 'app.query_type', 'app.status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TechnicianDetail = ClassRegistry::init('TechnicianDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TechnicianDetail);

		parent::tearDown();
	}

}
