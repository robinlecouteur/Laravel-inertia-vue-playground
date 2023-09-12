<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [       
                'name' =>'admin',
                'email' =>  'admin@admin.com',
                'password' => 'password', // password
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => 'password',
                'role' => 'standard',
            ]
        ];

        foreach($users as $user) {
            $created_user = User::createOrFirst([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ]);

            $created_user->assignRole($user['role']);
        }
    }
}
