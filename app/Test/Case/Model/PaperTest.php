<?php
App::uses('Paper', 'Model');

/**
 * Paper Test Case
 *
 */
class PaperTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.paper',
		'app.event',
		'app.stage',
		'app.city',
		'app.department',
		'app.user',
		'app.person',
		'app.document_type',
		'app.company',
		'app.companies_event',
		'app.data',
		'app.form',
		'app.personal_datum',
		'app.input',
		'app.input_state',
		'app.events_registration_type',
		'app.registration_type',
		'app.category',
		'app.entrada',
		'app.delivery_method',
		'app.delivery_methods_input',
		'app.sale',
		'app.inputs_sale',
		'app.committees_event',
		'app.committee',
		'app.committees_events_person',
		'app.type_user',
		'app.authorization',
		'app.authorizations_user',
		'app.location',
		'app.shelf',
		'app.event_type',
		'app.hotel',
		'app.events_hotel',
		'app.payment',
		'app.events_payment',
		'app.paper_input'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Paper = ClassRegistry::init('Paper');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Paper);

		parent::tearDown();
	}

}