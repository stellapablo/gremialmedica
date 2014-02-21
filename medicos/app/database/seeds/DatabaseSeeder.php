<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('AfiliadosTableSeeder');
                $this->call('PortadaTableSeeder');
                $this->call('sobreNosotrosTableSeeder');
                $this->call('estadoNoticiaTableSeeder');
		$this->call('CarrucelsTableSeeder');
		$this->call('GaleriaTableSeeder');
                $this->call('contactoTableSeeder');
		$this->call('CentraltextosTableSeeder');
	}

}