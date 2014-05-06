<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class BooksController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('books', $this->Book->find('all'));
    }
}