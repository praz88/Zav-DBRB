<?php


class InfoController extends AppController {
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }
    public function index() {
    
        $this->loadModel('Book');
    	$this->pageTitle = 'Info of all books';
        $this->set('total', $this->Book->find('count'));
        $this->set('donated', $this->Book->find('count',array('conditions'=>array('Book.status' => 'Donated'))));
        $this->set('requested', $this->Book->find('count',array('conditions'=>array('Book.status' => 'Requested'))));
        $this->set('sathishbng', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'sathishbng'))));
        $this->set('madhuri', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'madhuri'))));
        $this->set('aman', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'aman'))));
        $this->set('praz', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'praz'))));
        $this->set('sindhukoti', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'sindhukoti'))));
        $this->set('praveen', $this->Book->find('count',array('conditions'=>array('Book.adminName' => 'praveen'))));
        //$this->set('Books', $this->Book->find('all'));
    }
}
