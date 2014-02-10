<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('noticias', function(Blueprint $table) {
			$table->increments('id');
			$table->text('titulo');
			$table->text('descripcion');
			$table->text('desarrollo');
                        $table->text('fecha');                        
                        $table->text('imagen');            
                        $table->integer('estado');
                        $table->text('slug');
                        
                        $table->integer('seccion');
			$table->integer('tipo');			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('noticias');
	}

}