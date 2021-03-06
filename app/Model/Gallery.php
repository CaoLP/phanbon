<?php
App::uses('AppModel', 'Model');
/**
 * Gallery Model
 *
 * @property Media $Media
 */
class Gallery extends AppModel {

	public $actsAs = array('Media');
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
//		'media_id' => array(
//			'numeric' => array(
//				'rule' => array('numeric'),
//				//'message' => 'Your custom message here',
//				//'allowEmpty' => false,
//				//'required' => false,
//				//'last' => false, // Stop validation after this rule
//				//'on' => 'create', // Limit validation to 'create' or 'update' operations
//			),
//		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		
	);
	public function gallery_block($params){
		$id = !empty($params['id'])? $params['id'] : 1;
		$limit = !empty($params['limit'])? $params['limit'] : 8;
		$result =  $this->find('first', array('conditions'=>array('Gallery.id'=>$id)));
		$result = array_slice($result,0,$limit);
		return $result;
	}
}
