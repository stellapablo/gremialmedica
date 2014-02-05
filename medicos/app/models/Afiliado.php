<?php

class Afiliado extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'empleado_nro' => 'required',
		'afiliado_nro' => 'required',
		'ayn' => 'required',
		'fecha_nac' => 'required',
		'dni' => 'required',
		'localidad' => 'required',
		'domicilio' => 'required',
		'nacionalidad' => 'required',
		'estado_civil' => 'required',
		'reparticion' => 'required',
		'ministerio' => 'required',
		'grupo' => 'required',
		'fecha_alta' => 'required',
		'fecha_baja' => 'required',
		'puntaje' => 'required',
		'remuneraciones' => 'required',
		'funciones' => 'required',
		'observaciones' => 'required'
	);
}
