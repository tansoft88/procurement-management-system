<?php
App::uses('CategoryType', 'Model');

/**
 * CategoryType Test Case
 *
 */
class CategoryTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.category_type', 'app.investigation_category', 'app.investigation_category_type', 'app.investigation_type', 'app.patient_investigation', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_presenting_complaint', 'app.patient_pv_examination', 'app.physical_visual_examination', 'app.investigation');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoryType = ClassRegistry::init('CategoryType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoryType);

		parent::tearDown();
	}

}
