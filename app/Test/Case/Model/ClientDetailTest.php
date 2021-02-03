<?php
App::uses('ClientDetail', 'Model');

/**
 * ClientDetail Test Case
 *
 */
class ClientDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_detail', 'app.company_detail', 'app.company_location', 'app.department', 'app.noise_ban_color', 'app.client_impression', 'app.asset_statu', 'app.client_noise_ban', 'app.impression_status_history');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientDetail = ClassRegistry::init('ClientDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientDetail);

		parent::tearDown();
	}

}
