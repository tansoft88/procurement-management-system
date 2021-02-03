<?php
App::uses('RequestStatus', 'Model');

/**
 * RequestStatus Test Case
 *
 */
class RequestStatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.request_status', 'app.taxi_request');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequestStatus = ClassRegistry::init('RequestStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequestStatus);

		parent::tearDown();
	}

}
