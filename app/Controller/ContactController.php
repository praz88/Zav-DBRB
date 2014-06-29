

<?php


class ContactController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }
    public function index() {
    	$this->pageTitle = 'Contact Information';
        //$this->set('Books', $this->Book->find('all'));
    }
}
