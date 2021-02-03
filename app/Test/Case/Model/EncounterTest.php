<?php
App::uses('Encounter', 'Model');

/**
 * Encounter Test Case
 *
 */
class EncounterTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.encounter', 'app.patient', 'app.patient_encounter');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Encounter = ClassRegistry::init('Encounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encounter);

		parent::tearDown();
	}

}
