<?php
App::uses('DrugCategory', 'Model');

/**
 * DrugCategory Test Case
 *
 */
class DrugCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.drug_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DrugCategory = ClassRegistry::init('DrugCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DrugCategory);

		parent::tearDown();
	}

}
