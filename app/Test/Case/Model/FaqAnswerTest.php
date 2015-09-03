<?php
App::uses('FaqAnswer', 'Model');

/**
 * FaqAnswer Test Case
 */
class FaqAnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.faq_answer',
		'app.faq'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FaqAnswer = ClassRegistry::init('FaqAnswer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FaqAnswer);

		parent::tearDown();
	}

}
