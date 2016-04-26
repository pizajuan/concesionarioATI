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
