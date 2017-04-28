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

class PogoController extends AppController
{
    public function index()
    {
        if ($this->request->is('post')) {
            if (!empty($this->request->data['accounts'])) {
                $accounts = array_map(function ($account) {
                    list($user, $pass) = explode(':', $account);
                    $provider = $this->request->data['provider'];

                    return [
                        'AuthType' => $provider,
                        'Username' => trim($user),
                        'Password' => trim($pass)
                    ];
                }, explode(PHP_EOL, $this->request->data['accounts']));

                $this->set('accounts',  json_encode($accounts, JSON_PRETTY_PRINT));
            }
            else {
                $this->Flash->set('Something went wrong! Check if u filled in all fields!', [
                    'element' => 'error'
                ]);
            }
        }
    }
}
