<?php
App::uses('Car', 'Model');

/**
 * Car Test Case
 */
class CarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car',
		'app.model',
		'app.user',
		'app.type_cars',
		'app.date',
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
		$this->Car = ClassRegistry::init('Car');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Car);

		parent::tearDown();
	}

}
