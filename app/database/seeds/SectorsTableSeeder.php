<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SectorsTableSeeder extends Seeder {

	public function run()
	{
		$sector = [
					[
								'title' => 'Education',
								'description' => 'Volanondo night school',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'title' => 'Orphan help',
								'description' => 'chotomoni nibash',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'title' => 'Fund raising',
								'description' => 'Fund raising is a sector....',
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]

		];

		DB::table('sectors')->insert($sector);
	}

}