<?php
App::uses('AlevelQualification', 'Model');

/**
 * AlevelQualification Test Case
 *
 */
class AlevelQualificationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alevel_qualification', 'app.user', 'app.system_group', 'app.user_role');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlevelQualification = ClassRegistry::init('AlevelQualification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlevelQualification);

		parent::tearDown();
	}

}
