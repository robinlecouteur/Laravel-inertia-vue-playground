<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::createOrFirst([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
        ]);
      
    }
}
