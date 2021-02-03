<?php
App::uses('CompanyDetail', 'Model');

/**
 * CompanyDetail Test Case
 *
 */
class CompanyDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.company_detail', 'app.company_location');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyDetail = ClassRegistry::init('CompanyDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyDetail);

		parent::tearDown();
	}

}
