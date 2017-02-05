<?php
namespace App\Controller;

use Cake\Event\Event;

class UsersController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['register', 'logout']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller' => 'blog', 'action' => 'index']);
            }
            $this->Flash->set('Er ging iets mis! Controleer of alle velden correct ingevuld zijn.', [
                'element' => 'error'
            ]);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    public function register()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->set('Je account is succesvol aangemaakt!', [
                    'element' => 'success'
                ]);
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->set('Er ging iets mis! Controleer of alle velden correct ingevuld zijn.', [
                'element' => 'error'
            ]);
        }
        $this->set('user', $user);
    }
}