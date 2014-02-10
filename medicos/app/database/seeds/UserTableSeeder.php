<?php

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run() {
        
        DB::table('users')->truncate();
        
        $usuarios = array(
            array('nick' => 'Test', 'password' => Hash::make('gremial'), 'email' => 'test@test.com'),
        );

        DB::table('users')->insert($usuarios);
    }

}
