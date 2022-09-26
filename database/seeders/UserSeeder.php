<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Rafi Rahman Habibi',
            'username' => 'rafirahman',
            'email' => 'rafirahmann18@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
