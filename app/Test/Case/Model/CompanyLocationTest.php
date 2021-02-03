<?php
App::uses('CompanyLocation', 'Model');

/**
 * CompanyLocation Test Case
 *
 */
class CompanyLocationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.company_location', 'app.company_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CompanyLocation = ClassRegistry::init('CompanyLocation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CompanyLocation);

		parent::tearDown();
	}

}
