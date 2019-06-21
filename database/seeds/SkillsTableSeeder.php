<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets database
        DB::table('skills')->truncate();
        $faker = Factory::create();

        //Add Skill data
        for ($i=0; $i < 4; $i++)
        {
            $data[] = [
              'name' => $faker->name,
              'percentage' => rand(10, 90),
              'slug' => $faker->slug
            ];
        }

        DB::table('skills')->insert($data);

        $skill = [
            '1',
            '2',
            '3',
            '4'
        ];

        foreach (User::all() as $info)
        {
            shuffle($skill);

            for ($i=0; $i < rand(0, count($skill)-1); $i++)
            {
                $info->education()->detach($skill[$i]);
                $info->education()->attach($skill[$i]);
            }
        }
    }
}
