<?php


class AdminController extends AppController
{
    public $components = array('Paginator');
    // var $uses=array('Book');
    public function index()
    {
        $this->loadModel('Book');
        $this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 50,
        );
        $data = $this->paginate('Book');
        $this->set('books', $data);
    }

    public function insert()
    {
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $this->loadModel('Book');
        if ($this->request->is('post'))
        {
            $this->Book->create();

            $db = ConnectionManager::getDataSource('default');
            $this->request->data['Book']['donateDate'] = $db->expression('SYSDATE()');
            if ($this->Book->save($this->request->data))
            {
                 $Email->from(array('info@zavfoundation.org' => 'Admin inserted a book record - DBRB'));
                    $Email->to(array('prazanth2006@gmail.com','madhurileo27@gmail.com','president@zavfoundation.org','satishbng@gmail.com','pratul.hegde05@gmail.com','praveenindi@gmail.com','suprabha.r@gmail.com'));
                    $Email->subject('A book record was added by '.$this->request->data['Book']['adminName']);
                    $Email->send('Book details :'."\n".
                        'Title and author: '.$this->request->data['Book']['titleAndAuthor']."\n".
                        'Stream: '.$this->request->data['Book']['stream']."\n".
                        'Donor name: '.$this->request->data['Book']['donorName']."\n".
                        'Donor email: '.$this->request->data['Book']['donorEmail']."\n".
                        'Donor mobile: '.$this->request->data['Book']['donorMobile']."\n".
                        'Donor address: '.$this->request->data['Book']['donorAddress']."\n".
                        'Requester: '.$this->request->data['Book']['requesterName']."\n".
                        'Requester email: '.$this->request->data['Book']['requesterEmail']."\n".
                        'Requester mobile: '.$this->request->data['Book']['requesterMobile']."\n".
                        'Requester address: '.$this->request->data['Book']['requesterAddress']."\n".
                        'Status: '.$this->request->data['Book']['status']);
                        $this->Session->setFlash(__('The data has been saved'));
                        return $this->redirect(array('action' => '../admin/index?limit=5'));
                $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => 'index?limit=5'));
            }
            else {
                $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
            }
        }

    }

    public function delete($id)
    {
        $this->loadModel('Book');
        if ($this->request->is('get'))
        {
            throw new MethodNotAllowedException();
        }

        if ($this->Book->delete($id) )
        {
            $this->Session->setFlash( 'The Record has been deleted.','default',array(),'success');
            return $this->redirect(array('action' => 'index?limit=5'));
        }
    }

    public function edit($id)
    {
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $this->loadModel('Book');
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {
                $this->Book->id = $id;
                if($this->request->data['Book']['status'] == 'Donated')
                {
                    $db = ConnectionManager::getDataSource('default');
                    $this->request->data['Book']['transactionCompletedOn'] = $db->expression('SYSDATE()');
                }
                if($this->request->data['Book']['status'] == 'Requested')
                {
                    $db = ConnectionManager::getDataSource('default');
                    $this->request->data['Book']['requestDate'] = $db->expression('SYSDATE()');
                }
                if ($this->Book->save($this->request->data)) {
                    $Email->from(array('info@zavfoundation.org' => 'Admin edited a book record - DBRB'));
                    $Email->to(array('prazanth2006@gmail.com','madhurileo27@gmail.com','president@zavfoundation.org','satishbng@gmail.com','pratul.hegde05@gmail.com','praveenindi@gmail.com','suprabha.r@gmail.com'));
                    $Email->subject('A book record was edited by '.$this->request->data['Book']['adminName']);
                    $Email->send('Book details have been changed to :'."\n".
                        'Title and author: '.$this->request->data['Book']['titleAndAuthor']."\n".
                        'Stream: '.$this->request->data['Book']['stream']."\n".
                        'Donor name: '.$this->request->data['Book']['donorName']."\n".
                        'Donor email: '.$this->request->data['Book']['donorEmail']."\n".
                        'Donor mobile: '.$this->request->data['Book']['donorMobile']."\n".
                        'Donor address: '.$this->request->data['Book']['donorAddress']."\n".
                        'Requester: '.$this->request->data['Book']['requesterName']."\n".
                        'Requester email: '.$this->request->data['Book']['requesterEmail']."\n".
                        'Requester mobile: '.$this->request->data['Book']['requesterMobile']."\n".
                        'Requester address: '.$this->request->data['Book']['requesterAddress']."\n".
                        'Status: '.$this->request->data['Book']['status']);
                        $this->Session->setFlash(__('The data has been saved'));
                        return $this->redirect(array('action' => '../admin/index?limit=5'));

                    } else {
                    $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
                }
            }

        }else{
            $book = $this->Book->find('first',
                array('fields' => array('titleAndAuthor','stream','isbn','donorName', 'donorEmail', 'donorMobile','donorAddress','adminName','holder','requesterName', 'requesterEmail', 'requesterMobile','requesterAddress', 'status'),
                    'conditions' => array('Book.id' => $id)
                )
            );
            $this->set('books', $book);
        }
        //debug($this->viewVars);
    }
}