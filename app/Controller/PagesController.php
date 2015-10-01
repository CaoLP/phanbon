<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = array();

    /**
     * Displays a view
     *
     * @return void
     * @throws NotFoundException When the view file could not be found
     *    or MissingViewException in debug mode.
     */
    public function home($action = null)
    {
        $slide = $this->Setting->getCacheSetting('slide');
        $this->set(compact('slide'));
    }

    public function contact()
    {

    }

    public function faq()
    {

    }

    public function term($slug)
    {

    }

    public function post($type = null, $slug = null)
    {
        $cat = 'html-page';
        $this->loadModel('Post');
        if($type != null){
            $this->loadModel('PostCategory');
            $category = $this->PostCategory->find('first', array(
                'conditions' => array(
                    'PostCategory.slug' => $type,
                ),
                'recursive' => -1
            ));
            if(empty($category)) throw new NotFoundException(__('Không tìm thấy bài viết này'));
            $cat_ids = $this->PostCategory->find('list',
                array(
                    'conditions' => array(
                        'OR' => array(
                            'PostCategory.slug' => $type,
                            'ParentPostCategory.slug' => $type,
                        )
                    ),
                    'recursive' => 1
                )
            );
            $this->set(compact('category','cat_ids'));
        }
        if($type != null && $slug != null){
            $post = $this->Post->find('first',array(
                'conditions' => array(
                    'Post.slug' => $slug
                )
            ));
            if(empty($post)) throw new NotFoundException(__('Không tìm thấy bài viết này'));
            $this->set(compact('post'));
            $this->view = 'detail';
        }elseif($type != null){
            $cat = $type;
            $limit = 10;
            if($cat == 'san-pham') $limit = 30;
            $this->Paginator->settings = array(
                'conditions' => array(
                    'OR' => array(
                        'PostCategory.id' => array_keys($cat_ids),
                        'PostCategory.slug' => $cat
                    )
                ),
                'recursive' => 0,
                'limit' => $limit
            );
            $posts = $this->Paginator->paginate('Post');
            $this->set(compact('posts'));
            if(!empty(Configure::read('route_view')[$cat])) $this->view = Configure::read('route_view')[$cat];
            $this->set(compact('cat'));
        }
    }

    public function gallery($id = null)
    {
        $this->loadModel('Gallery');
        if($id == null){
            $galleries = $this->Gallery->find('all', array(
                'conditions' => array(

                )
            ));
            $this->set(compact('galleries'));
        }
    }

    public function aboutus()
    {
        $this->loadModel('Post');
        $post = $this->Post->find('first', array(
            'conditions' => array(
                'Post.slug' => 'gioi-thieu'
            )
        ));
        $this->set(compact('post'));
    }
}
