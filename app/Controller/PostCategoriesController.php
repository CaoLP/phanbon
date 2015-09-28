<?php
App::uses('AppController', 'Controller');
/**
 * PostCategories Controller
 *
 * @property PostCategory $PostCategory
 * @property PaginatorComponent $Paginator
 */
class PostCategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PostCategory->recursive = 0;
		$this->set('postCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid post category'));
		}
		$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
		$this->set('postCategory', $this->PostCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PostCategory->create();
			if ($this->PostCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The post category has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$parents = $this->PostCategory->ParentPostCategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid post category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PostCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The post category has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
			$this->request->data = $this->PostCategory->find('first', $options);
		}
		$parents = $this->PostCategory->ParentPostCategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PostCategory->id = $id;
		if (!$this->PostCategory->exists()) {
			throw new NotFoundException(__('Invalid post category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PostCategory->delete()) {
			$this->Session->setFlash(__('The post category has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The post category could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->PostCategory->recursive = 0;
		$this->set('postCategories', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->PostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid post category'));
		}
		$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
		$this->set('postCategory', $this->PostCategory->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PostCategory->create();
			if ($this->PostCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The post category has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$parentPostCategories = $this->PostCategory->ParentPostCategory->find('list');
		$this->set(compact('parentPostCategories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->PostCategory->exists($id)) {
			throw new NotFoundException(__('Invalid post category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PostCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The post category has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post category could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PostCategory.' . $this->PostCategory->primaryKey => $id));
			$this->request->data = $this->PostCategory->find('first', $options);
		}
		$parents = $this->PostCategory->ParentPostCategory->find('list');
		$this->set(compact('parents'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->PostCategory->id = $id;
		if (!$this->PostCategory->exists()) {
			throw new NotFoundException(__('Invalid post category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PostCategory->delete()) {
			$this->Session->setFlash(__('The post category has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The post category could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
