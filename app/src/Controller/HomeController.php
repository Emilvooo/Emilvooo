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

class HomeController extends AppController
{
    public function index()
    {
        $title = 'Welkom!';
        $content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum, turpis et vehicula rutrum, risus metus bibendum urna, id efficitur est dolor et purus. Nullam venenatis ligula vitae risus convallis fringilla. Phasellus sit amet vehicula sem, ac scelerisque risus. Quisque et mi vel arcu pulvinar ornare et sed ante. Nullam porta dui ante, fermentum malesuada nisl laoreet sed. Suspendisse sed justo ligula. In sed congue sapien. Morbi molestie lacus quis turpis maximus, id lacinia risus ornare. Phasellus eu urna tempor nisl facilisis malesuada. Integer non mattis ex. Aliquam dapibus sodales orci, vel rhoncus arcu venenatis quis.';
        $posts = $this->loadModel('BlogPosts')->find()->contain(['BlogPostsComments'])->order(['BlogPosts.created' => 'DESC'])->limit(6);
        $this->set(compact('title', 'content', 'posts'));
    }
}
