<?php
App::uses('CustomerFeedback', 'Model');

/**
 * CustomerFeedback Test Case
 */
class CustomerFeedbackTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.customer_feedback',
		'app.customer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomerFeedback = ClassRegistry::init('CustomerFeedback');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomerFeedback);

		parent::tearDown();
	}

}
