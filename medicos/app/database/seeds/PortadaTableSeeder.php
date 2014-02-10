<?php

class PortadaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run() {
        
        DB::table('portada')->truncate();

        $usuarios = array(
            array(  'texto_superior_derecho'            => 'Gremial Médica Hospitalaria
                                                            Frace breve de Bienvenida Hasta ochenta y nueve (89) 
                                                            caracteres',
                    'texto_central'                     => 'Gremial Médica Hospitalaria
                                                            Lorem ipsum dolor slo onsec tueraliquet Morbi nec 
                                                            In Curabitur lreaoreet nisl lorem in pellente e 
                                                            vidicus pannel impirus sadintas velisurabitur 
                                                            lreaoreet nisl lorem in pellente vidicus pannel. ',
                    'footer_titulo_primero'             => 'Quiens Somos',
                    'footer_titulo_segundo'             => 'Secciones',
                    'footer_titulo_tercero'             => 'Contacto',
                    'footer_titulo_primero_descripcion' => 'Lorem ipsum dolor sit amet, ea unum veri debitis
                                                            cum. No viris accumsan consulatu per. Ei amet sonet 
                                                            est, assum choro scriptorem id eos. Ad autem adipisci 
                                                            his. Mel et facete concludaturque. Oblique torquatos 
                                                            adolescens cu est. Vix no antiopam conclusionemque. 
                                                            Cum tamquam debitis mnesarchum ne, ex duo magna errem. 
                                                            Ei sit persius perfecto splendide, pro tamquam 
                                                            debitis et.',
                    'footer_titulo_segundo_descripcion' => 'Seccion 1 <br> Seccion 2',
                    'footer_titulo_tercero_descripcion' => 'Direccion : Av 9 de Julio  <br>
                                                            Telefono : 000.000.000.000 <br>
                                                            Email : emal@email.com'),
        );

        DB::table('portada')->insert($usuarios);
    }

}
