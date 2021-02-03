<?php
App::uses('DisLivestock', 'Model');

/**
 * DisLivestock Test Case
 *
 */
class DisLivestockTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.dis_livestock', 'app.livestock_disease', 'app.livestock', 'app.di');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DisLivestock = ClassRegistry::init('DisLivestock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DisLivestock);

		parent::tearDown();
	}

}
