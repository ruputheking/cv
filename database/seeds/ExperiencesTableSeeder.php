<?php

use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets the experience table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('experiences')->truncate();

        $faker = Factory::create();
        $date = Carbon::now()->modify('-1 year');

        for ($i=0; $i < 4; $i++) {
            $date->addDays(10);
            $createdDate = clone($date);

            $detail[] = [
              'office' => $faker->sentence(rand(1, 2)),
              'start_date' => $createdDate,
              'end_date' => $createdDate,
              'excerpt' => $faker->sentence(rand(20, 55)),
              'slug' => $faker->slug
            ];
        }
        DB::table('experiences')->insert($detail);

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
                $info->experience()->detach($skill[$i]);
                $info->experience()->attach($skill[$i]);
            }
        }
    }
}
