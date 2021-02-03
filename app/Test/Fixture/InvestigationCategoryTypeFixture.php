<?php
/**
 * InvestigationCategoryTypeFixture
 *
 */
class InvestigationCategoryTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'investigation_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'investigation_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'investigation_category_id' => 1,
			'investigation_type_id' => 1
		),
	);
}
