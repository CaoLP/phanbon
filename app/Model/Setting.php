<?php
App::uses('AppModel', 'Model');

/**
 * Setting Model
 *
 */
class Setting extends AppModel
{
    public $actsAs = array('Media');
    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array();

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array();

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array();

    public function getCacheSetting($key)
    {
        $result = Cache::read($key);
        if ($result)
            return $result;
        $result = $this->find('first',
            array(
                'conditions' => array(
                    'Setting.key' => $key
                )
            )
        );
        if($result)
            $result = json_decode($result['Setting']['data'],true);
        return $result;
    }
}
