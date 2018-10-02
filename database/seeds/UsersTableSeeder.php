<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create('fr_FR');


        for ($i = 0; $i < 10; $i++) {
            $gender = $faker->randomElement($array = array ('male', 'female'));

            $user = new User;
            /*$user->civilite = $faker->civilite;
            $user->first_name = $faker->first_name;
            $user->last_name = $faker->last_name;
            $user->email = $faker->unique()->email;
            $user->date_naissance = $faker->dateTimeThisCentury->format('Y-m-d');
            $user->password = bcrypt('123456');
            $user->telephone = $faker->phoneNumber;
            $user->save();*/

            $user->civilite         =  $gender;
            $user->first_name       =  $faker->firstName($gender);
            $user->last_name        =  $faker->lastName;
            $user->email            =  $faker->unique()->safeEmail;
            $user->password         =  bcrypt('123456');;
            $user->remember_token   =  str_random(10);
            $user->role             =  $faker->numberBetween($min = 1, $max = 4);
            $user->address          =  $faker->streetAddress;
            $user->zip_code         =  $faker->postcode;
            $user->city             =  $faker->city;
            $user->country          =  'France';
            $user->phone            =  $faker->phoneNumber;
            $user->save();
        }
    }
}
