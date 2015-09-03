<?php
App::uses('AppController', 'Controller');
/**
 * CustomerFeedbacks Controller
 *
 * @property CustomerFeedback $CustomerFeedback
 * @property PaginatorComponent $Paginator
 */
class CustomerFeedbacksController extends AppController {

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
		$this->CustomerFeedback->recursive = 0;
		$this->set('customerFeedbacks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CustomerFeedback->exists($id)) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		$options = array('conditions' => array('CustomerFeedback.' . $this->CustomerFeedback->primaryKey => $id));
		$this->set('customerFeedback', $this->CustomerFeedback->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CustomerFeedback->create();
			if ($this->CustomerFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The customer feedback has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer feedback could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->CustomerFeedback->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CustomerFeedback->exists($id)) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The customer feedback has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer feedback could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerFeedback.' . $this->CustomerFeedback->primaryKey => $id));
			$this->request->data = $this->CustomerFeedback->find('first', $options);
		}
		$customers = $this->CustomerFeedback->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CustomerFeedback->id = $id;
		if (!$this->CustomerFeedback->exists()) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerFeedback->delete()) {
			$this->Session->setFlash(__('The customer feedback has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer feedback could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->CustomerFeedback->recursive = 0;
		$this->set('customerFeedbacks', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->CustomerFeedback->exists($id)) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		$options = array('conditions' => array('CustomerFeedback.' . $this->CustomerFeedback->primaryKey => $id));
		$this->set('customerFeedback', $this->CustomerFeedback->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->CustomerFeedback->create();
			if ($this->CustomerFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The customer feedback has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer feedback could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$customers = $this->CustomerFeedback->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->CustomerFeedback->exists($id)) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CustomerFeedback->save($this->request->data)) {
				$this->Session->setFlash(__('The customer feedback has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer feedback could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CustomerFeedback.' . $this->CustomerFeedback->primaryKey => $id));
			$this->request->data = $this->CustomerFeedback->find('first', $options);
		}
		$customers = $this->CustomerFeedback->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->CustomerFeedback->id = $id;
		if (!$this->CustomerFeedback->exists()) {
			throw new NotFoundException(__('Invalid customer feedback'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CustomerFeedback->delete()) {
			$this->Session->setFlash(__('The customer feedback has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The customer feedback could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
