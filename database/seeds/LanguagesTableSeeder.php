<?php

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets database
        DB::table('languages')->truncate();
        $faker = Factory::create();

        //Language data
        for ($i=0; $i < 4; $i++)
        {
            $data[] = [
              'name' => $faker->name,
              'percentage' => rand(10, 90),
              'slug' => $faker->slug,
            ];
        }

        DB::table('languages')->insert($data);


        $tags = [
            '1',
            '2',
            '3'
        ];

        foreach (User::all() as $post)
        {
            shuffle($tags);

            for ($i = 0; $i < rand(0, count($tags)-1); $i++)
            {
                $post->language()->detach($tags[$i]);
                $post->language()->attach($tags[$i]);
            }
        }
    }
}
