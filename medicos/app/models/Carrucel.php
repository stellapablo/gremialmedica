<?php

class Carrucel extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'imagen' => 'required',
		'texto' => 'required'
	);
}
