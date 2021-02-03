<?php
App::uses('EpisodeStatus', 'Model');

/**
 * EpisodeStatus Test Case
 *
 */
class EpisodeStatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.episode_status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EpisodeStatus = ClassRegistry::init('EpisodeStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EpisodeStatus);

		parent::tearDown();
	}

}
