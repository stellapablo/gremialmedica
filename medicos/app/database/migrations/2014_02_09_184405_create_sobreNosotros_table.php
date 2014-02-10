<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatesobreNosotrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sobreNosotros', function(Blueprint $table) {
			$table->increments('id');
			$table->text('titulo_principal');
                        $table->text('subtitulo_principal');
                        $table->text('subtitulo_principal_descripcion');
                        $table->text('contenido');
                        $table->text('titulo_derecha_primero');
                        $table->text('titulo_derecha_descripcion_primero');
                        $table->text('titulo_derecha_segundo');
                        $table->text('titulo_derecha_descripcion_segundo');
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
            Schema::drop('sobreNosotros');
	}

}
