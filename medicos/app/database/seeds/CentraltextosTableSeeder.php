<?php

class CentraltextosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('centraltextos')->truncate();

		$centraltextos = array(
                    array('texto' => 'Test'),
		);

		// Uncomment the below to run the seeder
		 DB::table('centraltextos')->insert($centraltextos);
	}

}
