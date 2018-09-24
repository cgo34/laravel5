<?php

use Illuminate\Database\Seeder;
Use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create(
            [
                'civilite' => 'Mr',
                'first_name' => 'Geoffroy',
                'last_name' => 'Capdeville',
                'email' => 'admin@la.fr',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'valid' => true,
                'confirmed' => true,
                'remember_token' => str_random(10),
            ]
        );
    }
}
