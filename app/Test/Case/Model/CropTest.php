<?php
App::uses('Crop', 'Model');

/**
 * Crop Test Case
 *
 */
class CropTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.crop', 'app.crop_disease', 'app.disease');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Crop = ClassRegistry::init('Crop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Crop);

		parent::tearDown();
	}

}
