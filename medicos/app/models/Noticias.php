<?php

class Noticias extends Eloquent {
	protected $guarded = array();
        
        public $timestamps = true;
        
	public static $rules = array(
		'titulo'            => 'required',
		'descripcion'       => 'required',
		'desarrollo'        => 'required',
		'fecha'             => 'required',
		'estadoNoticia_id'  => 'required',
		'slug'              => 'required'
	);
        
          public function estadoNoticia_id()
          {
                //relación uno a muchos
                return $this->hasMany('estadoNoticia');
          }
}
