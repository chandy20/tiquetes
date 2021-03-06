<?php
/**
 * EventFixture
 *
 */
class EventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'stage_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true),
		'event_type_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true),
		'even_nombre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'even_numeResolucion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'even_palaClave' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 20),
		'even_observaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'length' => 20),
		'even_estado' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'even_imagen1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'even_imagen2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'even_fechInicio' => array('type' => 'date', 'null' => false, 'default' => null),
		'even_fechFinal' => array('type' => 'date', 'null' => false, 'default' => null),
		'even_publicar' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'even_codigo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fechainiciopublicacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'fechafinpublicacion' => array('type' => 'date', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1)
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
			'id' => '',
			'stage_id' => '',
			'event_type_id' => '',
			'even_nombre' => 'Lorem ipsum dolor ',
			'even_numeResolucion' => 'Lorem ipsum dolor ',
			'even_palaClave' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'even_observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'even_estado' => 1,
			'even_imagen1' => 'Lorem ipsum dolor ',
			'even_imagen2' => 'Lorem ipsum dolor ',
			'even_fechInicio' => '2014-07-28',
			'even_fechFinal' => '2014-07-28',
			'even_publicar' => 1,
			'even_codigo' => 'Lorem ipsum dolor ',
			'fechainiciopublicacion' => '2014-07-28',
			'fechafinpublicacion' => '2014-07-28'
		),
	);

}
