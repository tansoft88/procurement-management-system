<?php
App::uses('PhysicalVisualExamination', 'Model');

/**
 * PhysicalVisualExamination Test Case
 *
 */
class PhysicalVisualExaminationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.physical_visual_examination');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PhysicalVisualExamination = ClassRegistry::init('PhysicalVisualExamination');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PhysicalVisualExamination);

		parent::tearDown();
	}

}
