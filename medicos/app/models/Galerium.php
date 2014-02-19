<?php

class Galerium extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'imagen' => 'required',
		'descripcion' => 'required'
	);
}
