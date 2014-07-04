<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class DonateController extends AppController {
    public $components = array('Paginator');
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }

    public function index() {
        $this->loadModel('Book');
        if($this->request->is('post'))
        {
            $this->Book->create();
            $db = ConnectionManager::getDataSource('default');
            $this->request->data['Book']['donateDate'] = $db->expression('SYSDATE()');
            if ($this->Book->save($this->request->data)) {

                $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));

            } else {
                $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
            }
        }
    }

}