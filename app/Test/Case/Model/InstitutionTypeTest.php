<?php
App::uses('InstitutionType', 'Model');

/**
 * InstitutionType Test Case
 *
 */
class InstitutionTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.institution_type', 'app.client_organization', 'app.file_upload', 'app.verification_rate', 'app.billing_mode');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InstitutionType = ClassRegistry::init('InstitutionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InstitutionType);

		parent::tearDown();
	}

}
