<?php

use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets the education table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('education')->truncate();

        $faker = Factory::create();
        $date = Carbon::now()->modify('-1 year');

        for ($i=0; $i < 4; $i++) {
            $date->addDays(10);
            $createdDate = clone($date);

            $detail[] = [
              'school' => $faker->sentence(rand(1, 2)),
              'start_date' => $createdDate,
              'end_date' => $createdDate,
              'level' => $faker->sentence(rand(1, 5)),
              'slug' => $faker->slug
            ];
        }
        DB::table('education')->insert($detail);

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
