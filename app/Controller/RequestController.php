<?php

class RequestController extends AppController {
    public $components = array('Paginator');
    // var $uses=array('Book');
    public function index()
    {
        $this->loadModel('Book');
        $this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 3,
            'conditions' => array('Book.requester' => 'Not yet requested'), //use the conditions to allow books that have not yet been requested only
        );
        $data = $this->paginate('Book');
        $this->set('books', $data);
    }


    public function request($id)
    {
        $this->loadModel('Book');
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {
                $this->Book->id = $id;
                if ($this->Book->save($this->request->data)) {
                    $this->Session->setFlash(__('The data has been saved'));
                    return $this->redirect(array('action' => 'index'));

                } else {
                    $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
                }
            }

        }else{
            $book = $this->Book->find('first',
                array('fields' => array('title','isbn','donator','holder','requester', 'receiver'),
                    'conditions' => array('Book.id' => $id)
                )
            );
            $this->set('books', $book);
        }

    }







}