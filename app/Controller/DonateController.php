<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class DonateController extends AppController {
    public $components = array('Paginator');

    public function index() {

        $this->set('donate', $this->Donate->find('all'));
    }

}