<?php
App::uses('LivestockDisease', 'Model');

/**
 * LivestockDisease Test Case
 *
 */
class LivestockDiseaseTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.livestock_disease', 'app.dis_livestock', 'app.livestock', 'app.di');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LivestockDisease = ClassRegistry::init('LivestockDisease');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LivestockDisease);

		parent::tearDown();
	}

}
