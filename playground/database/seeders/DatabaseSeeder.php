<?php

namespace Database\Seeders;
use \App\Models\User;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\VesselSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::firstOrCreate(
        ['email' => 'admin@admin.com',],
        [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]
    );

    $this->call(VesselSeeder::class);

    }
}
