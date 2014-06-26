<?php
/**
 * Created by PhpStorm.
 * User: Prashanth
 * Date: 7/5/14
 * Time: 12:32 AM
 */
class Book extends AppModel 
{
    public $actsAs = array(
        'Search.Searchable'
    );

    public $filterArgs = array(
        'status' => array(
            'type' => 'like',
            'field' => 'status'
        ),
        'stream' => array(
			'type' => 'like',
			'field' => 'stream'
		),
        'title' => array(
            'type' => 'like',
            'field' => 'title'
        )
    );


    public $validate = array(
        'donatorEmail' => array(
            // or: array('ruleName', 'param1', 'param2' ...)
            'rule'       => 'email',
            'required'   => true,
            'allowEmpty' => false,
            // or: 'update'
            'on'         => 'create',
            'message'    => 'Entered Email id is incorrect.'
        ),
        'isbn' => array(
            'rule'    => array('minLength', '13'),
            'required' => true,
            'message' => 'Entered ISBN no. is incorrect.'
        ),
        'donatorMobile' => array(
            'rule'    => array('minLength', '10'),
            'required' => true,
            'message' => 'Entered Phone no. is incorrect.'
        ),
        'donatorName'=> array(
            'rule'     => 'alphaNumeric',
            'required' => true,
            'message' => 'Entered name should not contain anything other than alphabets and numbers.'
        ),
        'title' => array(
            'rule'     => 'notEmpty',
            'required' => true,
            'message' => 'title is Compulsary.'
        )
    );
}