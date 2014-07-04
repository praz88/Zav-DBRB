<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class BooksController extends AppController {
    public $components = array('Paginator','Search.Prg');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }

    public function index(){

        if($this->Session->read('NewUser.status') == null)
        {
            $this->Session->write('NewUser.status', 'Visited');
        }

        if($this->params['named'] != null)
        {
            if( $this->params['named']['status'] != null){
            $this->Session->write('Books.status', $this->params['named']['status']);
            $this->Session->write('Books.stream', $this->params['named']['stream']);
            }

            if( $this->params['named']['theme'] != null){
                $this->Session->write('Theme.name', $this->params['named']['theme']);
            }
        }

        $this->Prg->commonProcess();
        $this->Paginator->settings['conditions'] = $this->Book->parseCriteria($this->Prg->parsedParams());
        $this->set('books', $this->Paginator->paginate());

        /*$this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 3,
        );
        $data = $this->paginate('Book');
        $this->set('books', $data);*/
    }

}