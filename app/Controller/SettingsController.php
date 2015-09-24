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
    public function admin_view($key = null) {
        $setting = $this->Setting->find('first', array('conditions' => array('Setting.key' => $key)));
        if(empty($setting))
            throw new NotFoundException(__('Invalid setting'));
        $this->set('setting',  $setting);
    }

    /**
     * add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            if($this->request->data('Setting.data')){
                $this->request->data('Setting.data',
                    Set::combine(
                        $this->request->data('Setting.data'),
                        '{n}.key',
                        '{n}'
                    ));
                unset($this->request->data['Setting']['data']['']);
                $this->request->data('Setting.data',json_encode($this->request->data('Setting.data')));
                $this->Setting->create();
                if ($this->Setting->save($this->request->data)) {
                    $this->Session->setFlash(__('The role has been saved.'), 'default', array('class' => 'alert alert-success'));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('The role could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
                }
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
    public function admin_edit($key = null) {

        if ($this->request->is(array('post', 'put'))) {
            $this->request->data('Setting.data',json_encode($this->request->data('Setting.data')));
            if ($this->Setting->save($this->request->data)) {
                $this->Session->setFlash(__('The setting has been saved.'), 'default', array('class' => 'alert alert-success'));
                Cache::write($key,json_decode($this->request->data('Setting.data'),true));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The setting could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $setting = $this->Setting->find('first', array('conditions' => array('Setting.key' => $key)));
            if(empty($setting))
                throw new NotFoundException(__('Invalid setting'));
            $this->request->data = $setting;
            $this->request->data('Setting.data', json_decode($this->request->data('Setting.data'),true));
        }
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
