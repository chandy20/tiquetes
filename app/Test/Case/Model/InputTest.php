<?php
App::uses('Input', 'Model');

/**
 * Input Test Case
 *
 */
class InputTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.input',
		'app.input_state',
		'app.person',
		'app.document_type',
		'app.city',
		'app.department',
		'app.user',
		'app.type_user',
		'app.authorization',
		'app.authorizations_user',
		'app.company',
		'app.event',
		'app.stage',
		'app.location',
		'app.shelf',
		'app.paper',
		'app.entrada',
		'app.category',
		'app.paper_input',
		'app.event_type',
		'app.form',
		'app.personal_datum',
		'app.data',
		'app.committee',
		'app.committees_event',
		'app.companies_event',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.registration_type',
		'app.events_registration_type',
		'app.committees_events_person',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.sale',
		'app.inputs_sale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Input = ClassRegistry::init('Input');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Input);

		parent::tearDown();
	}

}