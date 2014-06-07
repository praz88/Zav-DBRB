

<?php


class ContactController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
    	$this->pageTitle = 'Contact Information';
        //$this->set('Books', $this->Book->find('all'));
    }
}
