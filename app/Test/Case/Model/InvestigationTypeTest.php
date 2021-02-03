<?php
App::uses('InvestigationType', 'Model');

/**
 * InvestigationType Test Case
 *
 */
class InvestigationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.investigation_type', 'app.investigation_category_type', 'app.investigation_category', 'app.category_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InvestigationType = ClassRegistry::init('InvestigationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InvestigationType);

		parent::tearDown();
	}

}
