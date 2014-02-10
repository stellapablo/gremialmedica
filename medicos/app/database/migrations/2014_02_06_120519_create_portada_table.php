<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portada', function(Blueprint $table) {
			$table->increments('id');
			$table->text('texto_superior_derecho');
                        $table->text('texto_central');
                        $table->text('footer_titulo_primero');                        
                        $table->text('footer_titulo_segundo');                        
                        $table->text('footer_titulo_tercero');
                        $table->text('footer_titulo_primero_descripcion');
                        $table->text('footer_titulo_segundo_descripcion');
                        $table->text('footer_titulo_tercero_descripcion');
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
                Schema::drop('portada');
	}

}
