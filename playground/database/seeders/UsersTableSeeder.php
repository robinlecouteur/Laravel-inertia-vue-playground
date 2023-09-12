<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
