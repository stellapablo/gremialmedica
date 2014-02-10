<?php

class sobreNosotrosController extends BaseController {

    /**
     * Administrador sobre_nosotros
     *
     * @var sobre_nosotros
     */
    protected $sobreNosotros;
//
    public function __construct(sobreNosotros $sobreNosotros) {
        $this->sobreNosotros = $sobreNosotros;
    }

    public function SobreNosotros() {
        $coleccion = sobreNosotros::all();
        $sobreNosotros= ($coleccion->find(1));
        
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));
        return View::make('sobreNosotros.sobreNosotros', compact('portada','sobreNosotros'));
    }
    
    public function SobreNosotrosEdicion() {
        $coleccion = sobreNosotros::all();
        $sobreNosotros= ($coleccion->find(1));
        
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));
        return View::make('sobreNosotros.sobreNosotros_edicion', compact('portada','sobreNosotros'));
    }
    
    public function actualizarsobre_nosotros() {
        $data = Input::all();
//            $text = $data['text'];
//            $id = $data['id'];            
//            echo ($text);
//            echo "<br>";
//            echo $id;
        if (isset($data['id'])) {
            $nombreColumna = $data['id'];
            $text = $data['text'];
            DB::table('sobreNosotros')->where('id', '=', 1)
                    ->update(array(
                        $nombreColumna => $text
            ));
        }
    }



}