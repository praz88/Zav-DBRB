<?php


class AdminController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
    	$this->pageTitle = 'Admin';
        //$this->set('Books', $this->Book->find('all'));
    }
}
