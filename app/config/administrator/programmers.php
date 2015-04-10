<?php

/**
 * Directors model config
 */

return array(

	'title' => 'Programmers',

	'single' => 'programmer',

	'model' => 'Programmer',

	/**
	 * The display columns
	 */
	'columns' => array(
		'first_name' => array(
			'title' => 'Аты',
		),
        'last_name' => array(
            'title' => 'Фамилиясы',
        ),
        'phone' => array(
            'title' => 'Телефону',
        ),
        'email' => array(
            'title' => 'Email',
        ),
	),

	/**
	 * The filter set
	 */
	'filters' => array(
		'first_name' => array(
            'title' => 'Аты'
        ),
		'last_name' => array(
            'title' => 'Фамилиясы'
        ),
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'first_name' => array(
			'title' => 'First Name',
			'type' => 'text',
		),
		'last_name' => array(
			'title' => 'Last Name',
			'type' => 'text',
		),
        'phone' => array(
            'title' => 'Phone',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email',
            'type' => 'text',
        ),


    ),

);