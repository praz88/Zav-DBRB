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
        $this->loadModel('Book');
        if ($this->request->is('post')) 
        {
                $this->Book->create();
                if ($this->Book->save($this->request->data)) 
                {
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
        $this->loadModel('Book');
        if (!empty($this->data))
        {
            if ($this->request->is('post')) {
                    $this->Book->id = $id;
                    if ($this->Book->save($this->request->data)) {
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