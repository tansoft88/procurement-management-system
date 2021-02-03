<?php
App::uses('StaffDetail', 'Model');

/**
 * StaffDetail Test Case
 *
 */
class StaffDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.staff_detail');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StaffDetail = ClassRegistry::init('StaffDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StaffDetail);

		parent::tearDown();
	}

}
