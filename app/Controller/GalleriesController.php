<?php
App::uses('AppController', 'Controller');

/**
 * Galleries Controller
 *
 * @property Gallery $Gallery
 * @property PaginatorComponent $Paginator
 */
class GalleriesController extends AppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index()
    {
        $this->Gallery->recursive = 0;
        $this->set('galleries', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->Gallery->exists($id)) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        $options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
        $this->set('gallery', $this->Gallery->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is(array('post', 'put'))) {
            $this->Gallery->create();
            if ($this->Gallery->save($this->request->data)) {
                $this->Session->setFlash(__('The gallery has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The gallery could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $id = $this->Gallery->getNextAutoNumber($this->Gallery);
        $this->request->data('Gallery.id', $id);
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null)
    {
        if (!$this->Gallery->exists($id)) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Gallery->save($this->request->data)) {
                $this->Session->setFlash(__('The gallery has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The gallery could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
            $this->request->data = $this->Gallery->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->Gallery->id = $id;
        if (!$this->Gallery->exists()) {
            throw new NotFoundException(__('Invalid gallery'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Gallery->delete()) {
            $this->Session->setFlash(__('The gallery has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The gallery could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function admin_gallery_lists()
    {
        $id = !empty($this->request->data['id']) ? $this->request->data['id'] : 1;
        $galleries = $this->Gallery->find('list');
        $this->layout = 'ajax';
        $this->set(compact('galleries', 'id'));
    }
}
