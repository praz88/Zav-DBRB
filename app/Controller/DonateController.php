<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class DonateController extends AppController {
    public $components = array('Paginator');

    public function index() {
        //index direcly maps to the view's index.ctp

        $this->loadModel('Book');
        if($this->request->is('post'))
        {
        $this->Book->create();
        if ($this->Book->save($this->request->data)) {
            $this->Session->setFlash(__('The data has been saved'));
            return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));

        } else {
            $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
        }
        }
    }

}