<?php
App::uses('CarModel', 'Model');

/**
 * CarModel Test Case
 */
class CarModelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.car_model',
		'app.type_car',
		'app.car'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CarModel = ClassRegistry::init('CarModel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CarModel);

		parent::tearDown();
	}

}
