<?php
App::uses('InvestigationCategoryType', 'Model');

/**
 * InvestigationCategoryType Test Case
 *
 */
class InvestigationCategoryTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.investigation_category_type', 'app.investigation_category', 'app.investigation_type', 'app.patient_investigation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvestigationCategoryType = ClassRegistry::init('InvestigationCategoryType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvestigationCategoryType);

		parent::tearDown();
	}

}
