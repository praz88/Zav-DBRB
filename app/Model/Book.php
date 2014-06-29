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
        'titleAndAuthor' => array(
            'type' => 'like',
            'field' => 'titleAndAuthor'
        )
    );
}