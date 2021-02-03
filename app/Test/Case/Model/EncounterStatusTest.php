<?php
App::uses('EncounterStatus', 'Model');

/**
 * EncounterStatus Test Case
 *
 */
class EncounterStatusTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.encounter_status');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EncounterStatus = ClassRegistry::init('EncounterStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EncounterStatus);

		parent::tearDown();
	}

}
