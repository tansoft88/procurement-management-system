<?php
App::uses('ProgrammeCategory', 'Model');

/**
 * ProgrammeCategory Test Case
 *
 */
class ProgrammeCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.programme_category', 'app.employment_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProgrammeCategory = ClassRegistry::init('ProgrammeCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProgrammeCategory);

		parent::tearDown();
	}

}
