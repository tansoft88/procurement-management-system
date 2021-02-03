<?php
App::uses('CropDisease', 'Model');

/**
 * CropDisease Test Case
 *
 */
class CropDiseaseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.crop_disease', 'app.disease', 'app.crop');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CropDisease = ClassRegistry::init('CropDisease');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CropDisease);

		parent::tearDown();
	}

}
