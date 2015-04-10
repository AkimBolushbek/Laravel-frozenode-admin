<?php

class Programmer extends Eloquent {

	public static $rules = array
	(
		'first_name' => 'required',
		'last_name' => 'required',
		'phone' => 'required',

	);
}