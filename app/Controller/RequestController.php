<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class RequestController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public function index() {

        $this->set('request', $this->Request->find('all'));
    }

}