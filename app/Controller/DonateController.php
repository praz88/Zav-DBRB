<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class DonateController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');

    public function index() {

$this->set('donates', $this->Donate->find('all'));
    }

}