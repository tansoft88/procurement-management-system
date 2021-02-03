<?php
App::uses('EmployementCategory', 'Model');

/**
 * EmployementCategory Test Case
 *
 */
class EmployementCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employement_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmployementCategory = ClassRegistry::init('EmployementCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmployementCategory);

		parent::tearDown();
	}

}
