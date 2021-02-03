<?php
/**
 * SuspendedStudentFixture
 *
 */
class SuspendedStudentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'student_detail_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'suspension_reason_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'active' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('id' => array('column' => 'id', 'unique' => 1)),
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
			'student_detail_id' => 1,
			'suspension_reason_id' => 1,
			'active' => 1,
			'created' => '2019-10-10 00:38:00'
		),
	);
}
