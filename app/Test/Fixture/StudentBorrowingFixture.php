<?php
/**
 * StudentBorrowingFixture
 *
 */
class StudentBorrowingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'student_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'book_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'date_from' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'date_to' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'date_returned' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'book_overdue' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
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
			'student_id' => 1,
			'book_id' => 1,
			'date_from' => '2019-10-10',
			'date_to' => '2019-10-10',
			'date_returned' => '2019-10-10',
			'book_overdue' => 1,
			'created' => '2019-10-10 00:35:25'
		),
	);
}
