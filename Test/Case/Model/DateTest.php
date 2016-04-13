<?php
App::uses('Date', 'Model');

/**
 * Date Test Case
 */
class DateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.date',
		'app.car',
		'app.model',
		'app.user',
		'app.type_cars',
		'app.date_service',
		'app.service'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Date = ClassRegistry::init('Date');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Date);

		parent::tearDown();
	}

}
