<?php

class InstituteController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }
    public function index()
    {
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {

                    $this->Session->write('Requester.name', $this->request->data['Institute']['requesterName']);
                    $this->Session->write('Requester.email', $this->request->data['Institute']['requesterEmail']);
                    $this->Session->write('Requester.mobile', $this->request->data['Institute']['requesterMobile']);
                    $this->Session->write('Requester.address', $this->request->data['Institute']['requesterAddress']);

                    $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));
            }

        }
    }
}