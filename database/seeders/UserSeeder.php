<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(10),
            'role' => 'ADMIN',
        ]);

        User::query()->create([
            'name' => 'Moderator',
            'email' => 'moderator@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('moderator'),
            'remember_token' => Str::random(10),
            'role' => 'EDITOR',
        ]);
    }
}
