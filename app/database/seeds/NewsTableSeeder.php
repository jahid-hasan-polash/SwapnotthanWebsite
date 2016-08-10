<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

	public function run()
	{
		$news = [
					[
								'title' => "Swapnotthan Website opening",
								'description' => "Swapnotthan Website opening ceremonydfvskdjfvdf",
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'title' => "Swapnotthan Website opening",
								'description' => "Swapnotthan Website opening ceremonydfvskdjfvdf",
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					],
					[
								'title' => "Swapnotthan Website opening",
								'description' => "Swapnotthan Website opening ceremonydfvskdjfvdf",
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
					]

		];

		DB::table('news')->insert($news);
	}

}