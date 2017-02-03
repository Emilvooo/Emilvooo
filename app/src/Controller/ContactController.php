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
use Cake\Network\Email\Email;

class ContactController extends Controller
{
    public function index()
    {
        $content = 'Vul het onderstaande contact formulier in om contact met ons op te nemen. We zullen dan indien nodig spoedig contact met u opnemen.';
        $this->set(compact('content'));
    }

    public function sendEmail()
    {
        if ($this->request->is('post')) {
            $emailContent = $this->request->data;
            $email = new Email();
            $email->transport('mailjet');
            $email->from([$emailContent['email'] => 'Emilvooo.nl'])
                ->to('emilveldhuizen@gmail.com')
                ->subject($emailContent['title']);
            if ($email->send($emailContent['message'])) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }
}
