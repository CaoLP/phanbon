<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

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
	public function admin_index() {
		$menus = $this->Menu->find('all', array('conditions'=>array('Menu.parent_id'=>'')));
		$this->set(compact('menus'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			if($this->request->data('Menu.url') == 'other'){
				$this->request->data['Menu']['url'] = $this->request->data('Menu.url_other');
			}
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$parents = $this->Menu->ParentMenu->find('list');
		$this->set(compact('parents'));
		$this->set('listUrls', $this->getControllerList());
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if($this->request->data('Menu.url') == 'other'){
				$this->request->data['Menu']['url'] = $this->request->data('Menu.url_other');
			}
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
			$this->request->data['Menu']['url_other'] = $this->request->data['Menu']['url'];
			$this->request->data['Menu']['url'] = 'other';
		}
		$parents = $this->Menu->ParentMenu->find('list');
		$this->set(compact('parents'));
		$this->set('listUrls', $this->getControllerList());
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The menu has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The menu could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function getControllerList()
	{
		$controllerClasses = App::objects('controller');
		foreach ($controllerClasses as $controller) {
			if ($controller != 'AppController') {
				// Load the controller
				App::import('Controller', str_replace('Controller', '', $controller));
				// Load its methods / actions
				$actionMethods = get_class_methods($controller);
				foreach ($actionMethods as $key => $method) {

					if ($method{0} == '_') {
						unset($actionMethods[$key]);
					}
				}
				// Load the ApplicationController (if there is one)
				App::import('Controller', 'AppController');
				$parentActions = get_class_methods('AppController');
				$controllers[$controller] = array_diff($actionMethods, $parentActions);
			}
		}
		$temp = array();
		foreach ($controllers as $con => $acts) {
			$con = str_replace('Controller', '', $con);
			$con_name = strtolower(preg_replace('~([a-z])([A-Z])~', '\\1_\\2', $con));
			foreach ($acts as $act) {
				$act_name = strtolower(preg_replace('~([a-z])([A-Z])~', '\\1_\\2', $act));
				$temp[Router::url(array('controller' => $con_name, 'action' => $act_name))] = Router::url(array('controller' => $con_name, 'action' => $act_name));
			}
		}
		$temp['other'] = 'Đường dẫn khác';
		return $temp;
	}
}
