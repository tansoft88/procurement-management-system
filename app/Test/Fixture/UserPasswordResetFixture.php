<?php
/**
 * UserPasswordResetFixture
 *
 */
class UserPasswordResetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'email_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'reset_token_hash' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'token_expiry_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'token_used' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'token_overriden' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => 'Value set to 1 if a new request for password reset is made before a previous one has expired'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_users' => array('column' => 'email_address', 'unique' => 0)),
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
			'email_address' => 'Lorem ipsum dolor sit amet',
			'reset_token_hash' => 'Lorem ipsum dolor sit amet',
			'created' => 1490162950,
			'token_expiry_date' => '2017-03-22 07:09:10',
			'token_used' => 1,
			'token_overriden' => 1
		),
	);
}
