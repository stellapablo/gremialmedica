<?php

class contactoTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run() {
        
        DB::table('contacto')->truncate();

        $contacto= array(
            array(  'titulo_principal'                          => 'BLOG',
                    'subtitulo_principal'                       => '[By Admin on December 01, 2012 with 01 Commnets]',
                    'subtitulo_principal_descripcion'           => 'Quiens Somos',
                    'contenido'                                 => 'Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater 
                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis 
                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce 
                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. 
                                                                    Aliquam congue
                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater 
                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis 
                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce 
                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. 
                                                                    Aliquam congue
                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam
                                                                    aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis suscipit 
                                                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce euismod consequat 
                                                                    ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue',
                    'titulo_derecha_primero'             => 'About Us',
                    'titulo_derecha_descripcion_primero' => 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel
                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.',
                    'titulo_derecha_segundo'             => 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel
                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.',
                    'titulo_derecha_descripcion_segundo' => 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel 
                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.'),
        );

        DB::table('contacto')->insert($contacto);
    }

}
