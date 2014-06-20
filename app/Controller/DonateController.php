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
            return $this->redirect(array('action' => 'index'));

        } else {
            $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
        }
        }
    }

    public function insert(){
        //insert will map directly to insert.ctp

        if ($this->request->is('post'))
        //post???
        {
            //Since you are using donate model within the controller donates, you dont have to explicitly load the model here
            $this->Donate->create();
            if ($this->Donate->save($this->request->data)) {
                $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => 'index'));

            } else {
                $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
            }
        }
    }

}