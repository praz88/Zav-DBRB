<?php

class InstituteController extends AppController {
    public function index()
    {
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {

                    $this->Session->write('Requester.name', $this->request->data['Book']['requesterName']);
                    $this->Session->write('Requester.email', $this->request->data['Book']['requesterEmail']);
                    $this->Session->write('Requester.mobile', $this->request->data['Book']['requesterMobile']);

                    $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));
            }

        }
    }
}