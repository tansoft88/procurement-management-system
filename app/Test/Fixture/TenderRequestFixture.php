<?php
/**
 * TenderRequestFixture
 *
 */
class TenderRequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tender_category_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tender_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tender_title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tender_specification' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'due_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'tender_status_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tender_closed' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'closed_by' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'request_code' => array('column' => 'tender_code', 'unique' => 1), 'quotation_status_code' => array('column' => 'tender_status_id', 'unique' => 0)),
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
			'tender_category_id' => 1,
			'tender_code' => 'Lorem ipsum dolor sit amet',
			'tender_title' => 'Lorem ipsum dolor sit amet',
			'tender_specification' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'due_date' => '2020-04-04 17:59:04',
			'tender_status_id' => 1,
			'created' => '2020-04-04 17:59:04',
			'created_by' => 'Lorem ipsum dolor sit amet',
			'tender_closed' => 1,
			'closed_by' => 'Lorem ipsum dolor sit amet'
		),
	);
}
