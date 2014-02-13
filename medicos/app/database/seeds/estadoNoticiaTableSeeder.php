<?php

class estadoNoticiaTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run() {
        
        DB::table('estadoNoticia')->truncate();

        $estadoNoticia= array(
            array(  'descripcion' => 'Publicada Pagina Principal'),
            array(  'descripcion' => 'Publicada'),
            array(  'descripcion' => 'No Publicada')
          
        );

        DB::table('estadoNoticia')->insert($estadoNoticia);
    }

}
