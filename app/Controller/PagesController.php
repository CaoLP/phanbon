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
App::uses('CakeEmail', 'Network/Email');

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
        $this->setTitle('Trang chủ');
    }

    public function contact()
    {
        $this->setTitle('Liên hệ');
        if($this->request->is('post')){
            $this->loadModel('Contact');
            $save_data = array(
                'Contact' => array(
                    'name'=> $this->request->data('name'),
                    'address'=> $this->request->data('address'),
                    'phone'=> $this->request->data('phone'),
                    'email'=> $this->request->data('email'),
                    'title'=> 'Liên hệ : ' . $this->request->data('name'),
                    'descriptions'=> $this->request->data('message'),
                )
            );
            if($this->Contact->save($save_data)){
                $Email = new CakeEmail('smtp');
                $Email->emailFormat('text')
                    ->subject($save_data['Contact']['title']);
                $this->loadModel('Setting');
                $mail_lists = $this->Setting->getCacheSetting('mail_receiver');
                $mail_lists = explode(';', $mail_lists['emails']['value']);
                $mail_lists = array_filter($mail_lists);
//                $mail_lists = Configure::read('mail_receiver');
                if($mail_lists){
                    $Email->to($mail_lists);
                    $content = "
Người gửi : {$save_data['Contact']['name']} \n
Số điện thoại : {$save_data['Contact']['phone']} \n
Email : {$save_data['Contact']['email']} \n
Địa chỉ : {$save_data['Contact']['address']} \n
Nội dung liên hệ : {$save_data['Contact']['descriptions']}\n\n\n
                    ";
                    $Email->send($content);
                }

                echo json_encode(array(
                    'status' => 'ok',
                    'messages' => array(
                        'Cảm ơn bạn đã quan tâm đến BIOWAY-HITECH <br>Chúng tôi sẽ liên lạc lại bạn trong thời gian sớm nhất'
                    )
                ));
                die;
            }else{
                echo 'ng'; die;
            }
        }
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
            $this->setTitle($category['PostCategory']['name']);
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
            $this->setTitle($post['Post']['title']);
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
            $view_route = Configure::read('route_view');
            if(!empty($view_route[$cat])) $this->view = $view_route[$cat];
            $this->set(compact('cat'));
        }
    }

    public function gallery($id = null)
    {
        $this->setTitle('Thư viện hình ảnh');
        $this->loadModel('Gallery');
        if($id == null){
            $galleries = $this->Gallery->find('all', array(
                'conditions' => array(

                ),
                'order' => array(
                    'Gallery.id DESC'
                )
            ));
            $this->set(compact('galleries'));
        }
    }

    public function aboutus()
    {
        $this->setTitle('Giới thiệu');
        $this->loadModel('Post');
        $post = $this->Post->find('first', array(
            'conditions' => array(
                'Post.slug' => 'gioi-thieu'
            )
        ));
        $this->set(compact('post'));
    }
}
