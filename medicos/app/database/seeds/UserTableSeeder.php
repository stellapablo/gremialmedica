<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run() {
        
        DB::table('usuarios')->truncate();
        
        $usuarios = array(
            array('nick' => 'Test', 'password' => Hash::make('gremial'), 'email' => 'test@test.com'),
        );

        DB::table('usuarios')->insert($usuarios);
    }

}
