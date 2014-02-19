<?php

class contactoController extends BaseController {

    /**
     * Administrador Contacto
     *
     * @var Contacto
     */
    protected $contacto;
//
    public function __construct(contacto $contacto) {
        $this->contacto = $contacto;
    }

    public function Contacto() {
        $coleccion = contacto::all();
        $contacto= ($coleccion->find(1));
        
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));
        return View::make('contacto.contacto', compact('portada','contacto'));
    }
    
    public function ContactoEdicion() {
        $coleccion = contacto::all();
        $contacto= ($coleccion->find(1));
        
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));
        return View::make('contacto.contacto_edicion', compact('portada','contacto'));
    }
    
    public function actualizarContacto() {
        $data = Input::all();
//            $text = $data['text'];
//            $id = $data['id'];            
//            echo ($text);
//            echo "<br>";
//            echo $id;
        if (isset($data['id'])) {
            $nombreColumna = $data['id'];
            $text = $data['text'];
            DB::table('contacto')->where('id', '=', 1)
                    ->update(array(
                        $nombreColumna => $text
            ));
        }
    }



}