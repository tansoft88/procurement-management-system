<?php
App::uses('DiseaseCategory', 'Model');

/**
 * DiseaseCategory Test Case
 *
 */
class DiseaseCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.disease_category', 'app.patient_diagnosi', 'app.patient_encounter', 'app.patient_baseline_observation', 'app.patient_investigation', 'app.investigation_category_type', 'app.investigation_category', 'app.category_type', 'app.investigation_type', 'app.patient_presenting_complaint', 'app.patient_pv_examination', 'app.physical_visual_examination');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DiseaseCategory = ClassRegistry::init('DiseaseCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DiseaseCategory);

		parent::tearDown();
	}

}
