<?php
/**
 * FormsPersonalDatumFixture
 *
 */
class FormsPersonalDatumFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'personal_datum_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true),
		'form_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
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
			'personal_datum_id' => '',
			'form_id' => ''
		),
	);

}
