<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:33 AM
 */

class DonateController extends AppController {
    public $components = array('Paginator');
    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('index');
    }

    public function index() {
        App::uses('CakeEmail', 'Network/Email');
        $Email = new CakeEmail();
        $this->loadModel('Book');
        if($this->request->is('post'))
        {
            $this->Book->create();
            $db = ConnectionManager::getDataSource('default');
            $this->request->data['Book']['donateDate'] = $db->expression('SYSDATE()');
            if ($this->Book->save($this->request->data)) {
                $Email->from(array('info@zavfoundation.org' => 'Donation alert - DBRB'));
                $Email->to(array('prazanth2006@gmail.com','madhurileo27@gmail.com','president@zavfoundation.org','satishbng@gmail.com','pratul.hegde05@gmail.com','praveenindi@gmail.com','suprabha.r@gmail.com'));
                $Email->subject('New book donated');
                $Email->send('A donor donated a book on dbrb website. Please reply to everyone on this mail saying you would be contacting the donor to procure the book ASAP.'."\n".
                    'Title and author: '.$this->request->data['Book']['titleAndAuthor']."\n".
                    'Stream: '.$this->request->data['Book']['stream']."\n".
                    'Donor name: '.$this->request->data['Book']['donorName']."\n".
                    'Donor email: '.$this->request->data['Book']['donorEmail']."\n".
                    'Donor mobile: '.$this->request->data['Book']['donorMobile']."\n".
                    'Donor address: '.$this->request->data['Book']['donorAddress']."\n");
                $this->Session->setFlash(__('The data has been saved'));
                return $this->redirect(array('action' => '../books/index/status:'.$this->Session->read('Books.status').'/stream:'.$this->Session->read('Books.stream')));

            } else {
                $this->Session->setFlash(__('The data could not be saved. Please, try again.'));
            }
        }
    }

}