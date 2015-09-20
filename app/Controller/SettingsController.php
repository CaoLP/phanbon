<?php
App::uses('AppController', 'Controller');
/**
 * Settings Controller
 *
 * @property Setting $Setting
 * @property PaginatorComponent $Paginator
 */
class SettingsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     * @param string $key
     * @return void
     */
    public function admin_index($key = null) {
        $this->Setting->recursive = 0;
        $settings = $this->Paginator->paginate();
        $this->set(compact('settings'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Setting->exists($id)) {
            throw new NotFoundException(__('Invalid setting'));
        }
        $options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
        $this->set('setting', $this->Setting->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Setting->create();
            if ($this->Role->save($this->request->data)) {
                $this->Session->setFlash(__('The role has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The role could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
    }


    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Setting->exists($id)) {
            throw new NotFoundException(__('Invalid setting'));
        }
        if ($this->request->is(array('post', 'put'))) {

            if ($this->Setting->save($this->request->data)) {
                $this->Session->setFlash(__('The setting has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Setting.' . $this->Setting->primaryKey => $id));
            $this->request->data = $this->Setting->find('first', $options);
        }
        $parents = $this->Setting->ParentSetting->find('list',array('conditions'=>array('ParentSetting.key <>'=>'temp')));
        $this->set(compact('parents'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Setting->id = $id;
        if (!$this->Setting->exists()) {
            throw new NotFoundException(__('Invalid setting'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Setting->delete()) {
            $this->Session->setFlash(__('The setting has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The setting could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
