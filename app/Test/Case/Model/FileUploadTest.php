<?php
App::uses('FileUpload', 'Model');

/**
 * FileUpload Test Case
 *
 */
class FileUploadTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.file_upload', 'app.client_organization', 'app.institution_type', 'app.verification_rate', 'app.billing_mode', 'app.user', 'app.system_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FileUpload = ClassRegistry::init('FileUpload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FileUpload);

		parent::tearDown();
	}

}
