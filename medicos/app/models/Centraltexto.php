<?php

class Centraltexto extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'texto' => 'required'
	);
}
