<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('usuarios', function($table) {
                        $table->increments('id');
                        $table->string('email', 100);
                        $table->string('password', 64);
                        $table->string('nick', 20);
                    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}