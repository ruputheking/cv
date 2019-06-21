<?php

use App\User;
use Faker\factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resets the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        //Admin User
        $data = new User;
        $data->name = 'Sapana Bhujel';
        $data->email = 'sapanabhujel@hotmail.com';
        $data->password = bcrypt('sapana@12');
        $data->knowledge = 'Web Designer';
        $data->address = 'Ramkot, Kathmandu';
        $data->phone = '+977 9818239069';
        $data->slug = 'sapana-bhujel';
        $data->admin = '1';
        $data->save();

        //Admin User
        $data1 = new User;
        $data1->name = 'Rupesh Chaudhary';
        $data1->email = 'rupeshchaudhary7338@hotmail.com';
        $data1->password = bcrypt('sapana@12');
        $data1->knowledge = 'Web Developer';
        $data1->address = 'Ramkot, Kathmandu';
        $data1->phone = '+977 9880227545';
        $data1->slug = 'rupesh-chaudhary';
        $data1->save();

        $faker = Factory::create();
        for ($i=1; $i < 30; $i++) {
          $phone = "+977 98" . rand(9843932, 18564723);
          $user[] = [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'password' => $faker->password(),
            'knowledge' => $faker->sentence(rand(1, 2)),
            'address' => $faker->address(),
            'phone' => $phone,
            'slug' => $faker->slug(),
          ];
        }
        DB::table('users')->insert($user);
    }
}
