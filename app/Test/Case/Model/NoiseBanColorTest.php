<?php
App::uses('NoiseBanColor', 'Model');

/**
 * NoiseBanColor Test Case
 *
 */
class NoiseBanColorTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.noise_ban_color', 'app.client_detail', 'app.client_impression');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NoiseBanColor = ClassRegistry::init('NoiseBanColor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NoiseBanColor);

		parent::tearDown();
	}

}
