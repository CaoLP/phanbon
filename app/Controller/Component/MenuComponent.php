<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 3/23/15
 * Time: 9:20 AM
 */
App::uses('Component', 'Controller');

class MenuComponent extends Component
{
    public function initialize(Controller $controller)
    {
        $controller->loadModel('Menu');
        $controller->set('menu', $controller->Menu->find('all', array('conditions' => array('Menu.parent_id' => ''))));
    }
}