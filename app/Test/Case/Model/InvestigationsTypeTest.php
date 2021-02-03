<?php
App::uses('InvestigationsType', 'Model');

/**
 * InvestigationsType Test Case
 *
 */
class InvestigationsTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.investigations_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvestigationsType = ClassRegistry::init('InvestigationsType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvestigationsType);

		parent::tearDown();
	}

}
