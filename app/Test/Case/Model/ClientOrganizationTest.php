<?php
App::uses('ClientOrganization', 'Model');

/**
 * ClientOrganization Test Case
 *
 */
class ClientOrganizationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client_organization', 'app.institution_type', 'app.verification_rate', 'app.billing_mode', 'app.file_upload', 'app.user', 'app.system_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClientOrganization = ClassRegistry::init('ClientOrganization');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClientOrganization);

		parent::tearDown();
	}

}
