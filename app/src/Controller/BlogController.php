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

class BlogController extends AppController
{
    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        return false;
    }

    public function index()
    {
        $content = 'Blijkbaar is dit een blog pagina.. Oh.';
        $posts = $this->loadModel('BlogPosts')->find()->contain(['BlogPostsComments'])->order(['BlogPosts.created' => 'DESC']);
        $this->set(compact('content', 'posts', 'countComments'));
    }

    public function view($id)
    {
        $post = $this->loadModel('BlogPosts')->get($id, ['contain' => ['BlogPostsComments' => ['sort' => ['BlogPostsComments.created' => 'DESC']]]]);
        $this->set(compact('post'));
    }

    public function createPost()
    {
        if ($this->isAuthorized($this->Auth->user())) {
            $post = $this->loadModel('BlogPosts')->newEntity();
            if ($this->request->is('post')) {
                $post = $this->loadModel('BlogPosts')->patchEntity($post, $this->request->data);
                $post->author = $this->Auth->user('username');
                if ($this->loadModel('BlogPosts')->save($post)) {
                    $this->Flash->set('Je post is succesvol geplaatst!', [
                        'element' => 'success'
                    ]);
                    return $this->redirect(['action' => $post->id]);
                }
                else {
                    $this->Flash->set('Er ging iets mis! Controleer of alle velden correct ingevuld zijn.', [
                        'element' => 'error'
                    ]);
                }
            }
        }
        else {
            return $this->redirect(['action' => 'index']);
        }
    }

    public function createComment($id)
    {
        $comment = $this->loadModel('BlogPostsComments')->newEntity();
        if ($this->request->is('post')) {
            $comment = $this->loadModel('BlogPostsComments')->patchEntity($comment, $this->request->data);
            $comment->blog_post_id = $id;
            $comment->author = $this->Auth->user('username');

            if ($this->loadModel('BlogPostsComments')->save($comment)) {
            $this->Flash->set('Je reactie is succesvol geplaatst!', [
                'element' => 'success'
            ]);
            return $this->redirect(['action' => $id]);
            }
            else {
                $this->Flash->set('Er ging iets mis! Controleer of alle velden correct ingevuld zijn.', [
                    'element' => 'error'
                ]);
            }
        }
    }
}
