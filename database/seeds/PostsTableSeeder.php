<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 0; $i < 40; $i++) 
        {
            DB::table('posts')->insert([
                'title' => $faker->text(20),
                'body' => $faker->text(200),
                'user_id' => $faker->numberBetween(1, 20),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
    }
}
