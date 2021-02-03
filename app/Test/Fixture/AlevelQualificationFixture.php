<?php
/**
 * AlevelQualificationFixture
 *
 */
class AlevelQualificationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'subject_code' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'grade' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'subject_code' => 1,
			'grade' => 'Lor',
			'user_id' => 1
		),
	);
}
