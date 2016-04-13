<?php
App::uses('DateService', 'Model');

/**
 * DateService Test Case
 */
class DateServiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.date_service',
		'app.date',
		'app.car',
		'app.model',
		'app.user',
		'app.type_cars',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DateService = ClassRegistry::init('DateService');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DateService);

		parent::tearDown();
	}

}
