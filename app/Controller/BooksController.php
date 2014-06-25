<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class BooksController extends AppController {
    public $components = array('Paginator','Search.Prg');


    public function index(){

        $this->Session->write('Books.status', $this->params['named']['status']);
        $this->Session->write('Books.stream', $this->params['named']['stream']);

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