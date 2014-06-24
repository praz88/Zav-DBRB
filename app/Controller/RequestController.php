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

                    $this->Session->write('Requester.name', $this->request->data['Book']['requesterName']);
                    $this->Session->write('Requester.email', $this->request->data['Book']['requesterEmail']);
                    $this->Session->write('Requester.mobile', $this->request->data['Book']['requesterMobile']);

                    $this->Session->setFlash(__('The data has been saved'));
                    return $this->redirect(array('action' => '../books/index/status:Available/stream:School'));

                } else {
                    $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
                }
            }

        }else{
            $book = $this->Book->find('first',
                array('fields' => array('title','isbn','donatorName','holder','requesterName', 'requesterEmail', 'requesterMobile'),
                    'conditions' => array('Book.id' => $id)
                )
            );
            $this->set('books', $book);
        }
    }
}