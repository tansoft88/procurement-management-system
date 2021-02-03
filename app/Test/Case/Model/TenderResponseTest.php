<?php
App::uses('TenderResponse', 'Model');

/**
 * TenderResponse Test Case
 *
 */
class TenderResponseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tender_response', 'app.tender_request', 'app.tender_category', 'app.supplier_detail', 'app.tender_status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TenderResponse = ClassRegistry::init('TenderResponse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TenderResponse);

		parent::tearDown();
	}

}
