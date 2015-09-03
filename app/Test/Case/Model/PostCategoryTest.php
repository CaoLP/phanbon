<?php
App::uses('PostCategory', 'Model');

/**
 * PostCategory Test Case
 */
class PostCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post_category',
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PostCategory = ClassRegistry::init('PostCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PostCategory);

		parent::tearDown();
	}

}
