<?php

class PortadaController extends BaseController {

    /**
     * Administrador portada
     *
     * @var portada
     */
    protected $portada;

    public function __construct(portada $portada) {
        $this->portada = $portada;
    }

    public function inicio() {
        $portada = $this->portada->find(1);


        return View::make('portada.portada', compact('portada'));
    }

    public function edicion() {
        $portada = $this->portada->find(1);
        return View::make('portada.portada_edicion', compact('portada'));
    }

    public function prueba2Welcome() {
        return View::make('prueba.prueba2');
    }

    public function actualizarPortada() {
        $data = Input::all();
//            $text = $data['text'];
//            $id = $data['id'];            
//            echo ($text);
//            echo "<br>";
//            echo $id;
        if (isset($data['id'])) {
            $nombreColumna = $data['id'];
            $text = $data['text'];
            DB::table('portada')->where('id', '=', 1)
                    ->update(array(
                        $nombreColumna => $text
            ));
        }
    }

}