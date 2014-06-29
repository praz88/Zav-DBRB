<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
//'DebugKit.Toolbar',
    public $components = array(
        'Session',
        /* add Auth component and set  the urls that will be loaded after the login and logout actions is performed */
        'Auth' => array(
            'loginRedirect' => array('controller' => 'admin', 'action' => 'index?limit=5'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('home','books', 'donate','receive','institute','contact','users');
    }

    public function beforeSave($options = array()) {

        /* password hashing */
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    public $helpers = array(
        'Form' => array('className' => 'Bs3Form')
    );


}

