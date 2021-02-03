<?php
App::uses('EmploymentDetail', 'Model');

/**
 * EmploymentDetail Test Case
 *
 */
class EmploymentDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employment_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmploymentDetail = ClassRegistry::init('EmploymentDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmploymentDetail);

		parent::tearDown();
	}

}
