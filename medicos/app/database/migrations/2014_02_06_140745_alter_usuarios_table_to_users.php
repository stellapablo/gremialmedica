<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsuariosTableToUsers extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     //   Schema::rename('usuarios', 'users');
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    //    Schema::rename('users', 'usuarios');
    }

}
