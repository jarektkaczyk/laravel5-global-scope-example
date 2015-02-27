<?php

use Faker\Factory as Faker;
use App\Post;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Post::create([
				'title'     => $faker->sentence(4),
				'published' => rand(0,1),
			]);
		}
	}
}