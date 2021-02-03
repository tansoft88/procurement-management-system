<?php
App::uses('QueryLog', 'Model');

/**
 * QueryLog Test Case
 *
 */
class QueryLogTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.query_log', 'app.query_type', 'app.status', 'app.merchant_detail', 'app.operating_district', 'app.techinician_detail', 'app.department', 'app.technician_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QueryLog = ClassRegistry::init('QueryLog');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QueryLog);

		parent::tearDown();
	}

}
