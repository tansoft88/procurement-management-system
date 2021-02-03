<?php
App::uses('PatientFamilyDetail', 'Model');

/**
 * PatientFamilyDetail Test Case
 *
 */
class PatientFamilyDetailTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.patient_family_detail', 'app.bloog_group');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PatientFamilyDetail = ClassRegistry::init('PatientFamilyDetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PatientFamilyDetail);

		parent::tearDown();
	}

}
