<?php
App::uses('Media', 'Model');

/**
 * Media Test Case
 */
class MediaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.media',
		'app.ref',
		'app.customer',
		'app.customer_feedback',
		'app.gallery'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Media = ClassRegistry::init('Media');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Media);

		parent::tearDown();
	}

}
