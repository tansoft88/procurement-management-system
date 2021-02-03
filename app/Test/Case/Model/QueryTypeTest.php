<?php
App::uses('QueryType', 'Model');

/**
 * QueryType Test Case
 *
 */
class QueryTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.query_type', 'app.query_log');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QueryType = ClassRegistry::init('QueryType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QueryType);

		parent::tearDown();
	}

}
