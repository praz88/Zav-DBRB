<?php

class RequestController extends AppController {
    public $components = array('Paginator');
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }
    // var $uses=array('Book');
    public function index($id)
    {
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $this->loadModel('Book');
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {
                $this->Book->id = $id;
                $db = ConnectionManager::getDataSource('default');
                $this->request->data['Book']['requestDate'] = $db->expression('SYSDATE()');
                if ($this->Book->save($this->request->data)) {
		    $Email->from(array('info@zavfoundation.org' => 'Request book alert - DBRB'));
                    $Email->to(array('prazanth2006@gmail.com','madhurileo27@gmail.com','president@zavfoundation.org','satishbng@gmail.com','pratul.hegde05@gmail.com','praveenindi@gmail.com','suprabha.r@gmail.com'));
                    $Email->subject('A book was requested by '.$this->request->data['Book']['requesterName']);
                    $Email->send('Book details are below, please contact the requester ASAP and intimidate on this email by replying to everyone that you are taking action in this regard.'."\n".
                        'Title and author: '.$this->request->data['Book']['titleAndAuthor']."\n".
                        'Stream: '.$this->request->data['Book']['stream']."\n".
                        'Requester: '.$this->request->data['Book']['requesterName']."\n".
                        'Requester email: '.$this->request->data['Book']['requesterEmail']."\n".
                        'Requester mobile: '.$this->request->data['Book']['requesterMobile']."\n".
                        'Requester address: '.$this->request->data['Book']['requesterAddress']."\n".
                        'Reason for requesting : '.$this->request->data['Book']['reasonForRequesting']);
                    $this->Session->setFlash(__('The data has been saved'));
                    return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));

                } else {
                    $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
                }
            }

        }else{
            $book = $this->Book->find('first',
                array('fields' => array('titleAndAuthor','stream','isbn','holder','requesterName', 'requesterEmail', 'requesterMobile'),
                    'conditions' => array('Book.id' => $id)
                )
            );
            $this->set('books', $book);
        }
    }
}