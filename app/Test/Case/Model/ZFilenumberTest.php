<?php
App::uses('ZFilenumber', 'Model');

/**
 * ZFilenumber Test Case
 *
 */
class ZFilenumberTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.z_filenumber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ZFilenumber = ClassRegistry::init('ZFilenumber');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ZFilenumber);

		parent::tearDown();
	}

}
