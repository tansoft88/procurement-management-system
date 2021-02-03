<?php
App::uses('EmploymentCategory', 'Model');

/**
 * EmploymentCategory Test Case
 *
 */
class EmploymentCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.employment_category', 'app.programme_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmploymentCategory = ClassRegistry::init('EmploymentCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmploymentCategory);

		parent::tearDown();
	}

}
