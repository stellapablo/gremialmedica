<?php

class NoticiasController extends BaseController {

    /**
     * Administrador Noticias
     *
     * @var Noticias
     */
    protected $Noticias;

    public function __construct(Noticias $Noticias) {
        $this->Noticias = $Noticias;
    }
    
    public function nuevaNoticia() {

        $estadoNoticia = estadoNoticia::lists('descripcion', 'id');
        return View::make('noticias.nuevaNoticia', compact('estadoNoticia'));
    }
    
    public function guardarNoticia(){
        $data = Input::all();        
        
        if (isset($data['titulo'])) {
            
        $titulo             = $data['titulo'];
        $descripcion        = $data['descripcion'];
        $fecha              = $data['fecha'];
        $imagen             = $data['imagen'];
        $estadoNoticia_id   = $data['estadoNoticia_id'];
        $desarrollo         = $data['desarrollo'];
        $url                = $data['slug'];
        $slug2               = $this->getSlug($url);
        
        $condigoFechaActual=date('-d-m-Y-H-i-s');
        $slug = $slug2.$condigoFechaActual;

        $noticias = new noticias;
        $noticias->titulo = $titulo;
        $noticias->descripcion = $descripcion;
        $noticias->desarrollo = $desarrollo;
        $noticias->fecha = $fecha;
        $noticias->imagen = $imagen;
        $noticias->estadoNoticia_id = $estadoNoticia_id;
        $noticias->slug = $slug;
        $noticias->save();
        }
    }
    
    public function getSlug($cadena, $separador = '-')
    {
            $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
            $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
            $slug = strtolower(trim($slug, $separador));
            $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
            return $slug;
    }
    
    public function noticiaActual($slug){
        
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));        
        
        $noticias = noticias::where('slug','=', $slug)->get();
        return View::make('noticias.noticia', compact('portada','noticias'));
    }
    
    public function editarNoticiaActual($slug){
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));        
        
        $noticias = noticias::where('slug','=', $slug)->get();
        return View::make('noticias.noticia_edicion', compact('portada','noticias','slug'));        
    }
    
    public function editarNoticiaActual_guardar($slug){
        $data  = Input::all();
        $campo = $data['id'];
        $text  = $data['text'];
        
        if (isset($data['text'])) {
            DB::table('noticias')->where('slug', '=', $slug)
                    ->update(array(
                        $campo => $text
            ));
        }        
    }
    
    public function listarNoticias(){        
        $noticias = Noticias::all();
        
        $estadoNoticia = estadoNoticia::lists('descripcion', 'id');
        return View::make('noticias.noticias_listado', compact('noticias','estadoNoticia'));
    }

    

}