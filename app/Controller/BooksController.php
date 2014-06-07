<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class BooksController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public function index() {
        $this->paginate = array(
            'paramType' => 'querystring',
            'limit' => 3,
        );
        $data = $this->paginate('Book');
        $this->set('books', $data);
    }

}