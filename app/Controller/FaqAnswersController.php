<?php
App::uses('AppController', 'Controller');
/**
 * FaqAnswers Controller
 *
 * @property FaqAnswer $FaqAnswer
 * @property PaginatorComponent $Paginator
 */
class FaqAnswersController extends AppController {

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
		$this->FaqAnswer->recursive = 0;
		$this->set('faqAnswers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FaqAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		$options = array('conditions' => array('FaqAnswer.' . $this->FaqAnswer->primaryKey => $id));
		$this->set('faqAnswer', $this->FaqAnswer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FaqAnswer->create();
			if ($this->FaqAnswer->save($this->request->data)) {
				$this->Session->setFlash(__('The faq answer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq answer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$faqs = $this->FaqAnswer->Faq->find('list');
		$this->set(compact('faqs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FaqAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FaqAnswer->save($this->request->data)) {
				$this->Session->setFlash(__('The faq answer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq answer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FaqAnswer.' . $this->FaqAnswer->primaryKey => $id));
			$this->request->data = $this->FaqAnswer->find('first', $options);
		}
		$faqs = $this->FaqAnswer->Faq->find('list');
		$this->set(compact('faqs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FaqAnswer->id = $id;
		if (!$this->FaqAnswer->exists()) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FaqAnswer->delete()) {
			$this->Session->setFlash(__('The faq answer has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The faq answer could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}


/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FaqAnswer->recursive = 0;
		$this->set('faqAnswers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->FaqAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		$options = array('conditions' => array('FaqAnswer.' . $this->FaqAnswer->primaryKey => $id));
		$this->set('faqAnswer', $this->FaqAnswer->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FaqAnswer->create();
			if ($this->FaqAnswer->save($this->request->data)) {
				$this->Session->setFlash(__('The faq answer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq answer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$faqs = $this->FaqAnswer->Faq->find('list');
		$this->set(compact('faqs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->FaqAnswer->exists($id)) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FaqAnswer->save($this->request->data)) {
				$this->Session->setFlash(__('The faq answer has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faq answer could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FaqAnswer.' . $this->FaqAnswer->primaryKey => $id));
			$this->request->data = $this->FaqAnswer->find('first', $options);
		}
		$faqs = $this->FaqAnswer->Faq->find('list');
		$this->set(compact('faqs'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->FaqAnswer->id = $id;
		if (!$this->FaqAnswer->exists()) {
			throw new NotFoundException(__('Invalid faq answer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FaqAnswer->delete()) {
			$this->Session->setFlash(__('The faq answer has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The faq answer could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
