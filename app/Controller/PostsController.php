<?php
App::uses('AppController', 'Controller');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController
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
        $slug = $this->request->query('type');
        $params = array();
        $this->Post->recursive = 0;
        if (!empty($slug)) {
            $post_category = $this->Post->PostCategory->find('first',
                array(
                    'conditions' =>
                        array(
                            'PostCategory.slug' => $slug
                        )
                )
            );
            if (empty($post_category)) throw new NotFoundException();
            $this->Paginator->settings = array(
                'conditions' => array(
                    'PostCategory.slug' => $slug
                )
            );
            $params = array('type' => $slug);
        }
        $this->Post->recursive = 0;
        $this->set('posts', $this->Paginator->paginate());
        $this->set(compact('params'));
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
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
        $this->set('post', $this->Post->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        $slug = $this->request->query('type');
        if ($this->request->is(array('post', 'put'))) {
            if (empty($this->request->data['Post']['slug']))
                $this->request->data['Post']['slug'] = $this->make_slug($this->request->data['Post']['title']);
            $this->Post->create();
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'), 'default', array('class' => 'alert alert-success'));
                if (!empty($slug))
                    return $this->redirect(array('action' => 'index','?'=>array('type' => $slug)));
                else
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $id = $this->Post->getNextAutoNumber($this->Post);
        $this->request->data('Post.id', $id);
        $slug = $this->request->query('type');
        if (!empty($slug)) {
            $post_category = $this->Post->PostCategory->find('first',
                array(
                    'conditions' =>
                        array(
                            'PostCategory.slug' => $slug
                        )
                )
            );
            if (empty($post_category)) throw new NotFoundException();
            $this->Paginator->settings = array(
                'conditions' => array(
                    'PostCategory.slug' => $slug
                )
            );
            $this->request->data('Post.post_category_id', $post_category['PostCategory']['id']);
        }
        $postCategories = $this->Post->PostCategory->find('list');
        $this->set(compact('postCategories'));
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
        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if (empty($this->request->data['Post']['slug']))
                $this->request->data['Post']['slug'] = $this->make_slug($this->request->data['Post']['title']);
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('The post has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
            $this->request->data = $this->Post->find('first', $options);
        }
        $postCategories = $this->Post->PostCategory->find('list');
        $this->set(compact('postCategories'));
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
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Post->delete()) {
            $this->Session->setFlash(__('The post has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The post could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
