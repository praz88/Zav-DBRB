<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class UsersController extends AppController {
    public $components = array('Paginator','Auth','Session');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout','add');
    }


    public function login() {
        if ($this->request->is('post')) {
            /* login and redirect to url set in app controller */
            if (!empty($this->request->data['User']) && $this->Auth->login()) {

                $this->Session->write('Admin.username', ($this->request->data['User']));

                return $this->redirect(array('controller' => 'admin','action' => 'index?limit=5'));
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }

    }

    public function logout() {
        /* logout and redirect to url set in app controller */
        $this->Session->delete('Admin.username');
        return $this->redirect($this->Auth->logout());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('controller' => 'users','action' => 'login'));
            }
            $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
        }
    }

}