<?php
App::uses('TypeCar', 'Model');

/**
 * TypeCar Test Case
 */
class TypeCarTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.type_car',
		'app.model'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TypeCar = ClassRegistry::init('TypeCar');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TypeCar);

		parent::tearDown();
	}

}
