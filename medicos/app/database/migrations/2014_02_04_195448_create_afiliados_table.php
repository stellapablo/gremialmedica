<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAfiliadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('afiliados', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('empleado_nro');
			$table->integer('afiliado_nro');
			$table->string('ayn');
			$table->date('fecha_nac');
			$table->string('dni');
			$table->string('localidad');
			$table->string('domicilio');
			$table->string('nacionalidad');
			$table->string('estado_civil');
			$table->string('reparticion');
			$table->string('ministerio');
			$table->string('grupo');
			$table->date('fecha_alta');
			$table->date('fecha_baja');
			$table->string('puntaje');
			$table->string('remuneraciones');
			$table->string('funciones');
			$table->text('observaciones');
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
		Schema::drop('afiliados');
	}

}
