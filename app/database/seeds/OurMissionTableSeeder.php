<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class OurMissionTableSeeder extends Seeder {

	public function run()
	{
		$description = [
								'description' => "It is the small try of SUST student to achive a big dream.Our aim is to motivate the students to do something positive worthwhile and constructive for themselves and rest of the society...",
								
								'created_at' => date('Y-m-d H:i:s'),
								'updated_at' => date('Y-m-d H:i:s')
		];
		DB::table('our_mission')->insert($description);
	}

}