<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 27/4/14
 * Time: 4:34 PM
 */

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}