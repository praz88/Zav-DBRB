<?php

class RequestController extends AppController {
    public $components = array('Paginator');
    // var $uses=array('Book');
    public function index($id)
    {
        $this->loadModel('Book');
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {
                $this->Book->id = $id;
                if ($this->Book->save($this->request->data)) {

                    $this->Session->setFlash(__('The data has been saved'));
                    return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));

                } else {
                    $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
                }
            }

        }else{
            $book = $this->Book->find('first',
                array('fields' => array('title','stream','isbn','donatorName','holder','requesterName', 'requesterEmail', 'requesterMobile'),
                    'conditions' => array('Book.id' => $id)
                )
            );
            $this->set('books', $book);
        }
    }
}