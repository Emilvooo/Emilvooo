<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $posts = $this->loadModel('BlogPosts')->find()->contain(['BlogPostsComments'])->order(['BlogPosts.created' => 'DESC']);
        $this->set(compact('posts', 'countComments'));
    }

    public function view($id)
    {
        $post = $this->loadModel('BlogPosts')->get($id, ['contain' => ['BlogPostsComments' => ['sort' => ['BlogPostsComments.created' => 'DESC']]]]);
        $this->set(compact('post'));
    }

    public function createComment($id)
    {
        $comment = $this->loadModel('BlogPostsComments')->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->loadModel('BlogPostsComments')->patchEntity($comment, $this->request->data);
            $comment->author = 'Emilvooo';
            $comment->blog_post_id = $id;
            if ($this->loadModel('BlogPostsComments')->save($comment)) {
                return $this->redirect(['action' => $id]);
            }
            else {
                $this->Flash->set('Er ging iets mis! Controleer of alle velden correct ingevuld zijn.', ['class' => 'alert alert-danger']);
            }
        }
    }
}
