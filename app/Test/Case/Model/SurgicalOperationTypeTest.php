<?php
App::uses('SurgicalOperationType', 'Model');

/**
 * SurgicalOperationType Test Case
 *
 */
class SurgicalOperationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.surgical_operation_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SurgicalOperationType = ClassRegistry::init('SurgicalOperationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SurgicalOperationType);

		parent::tearDown();
	}

}
