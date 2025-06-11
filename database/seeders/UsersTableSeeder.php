<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
                'phone' => '0123456789',
                'address' => '123 Admin Street',
                'google_id' => null,
                'token' => Str::random(60),
                'avatar' => 'admin_avatar.png',
                'role_id' => 1, // Admin
                'is_active' => 1,
                'fb_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Normal User',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
                'phone' => '0987654321',
                'address' => '456 User Road',
                'google_id' => null,
                'token' => Str::random(60),
                'avatar' => 'user_avatar.png',
                'role_id' => 2, // User
                'is_active' => 1,
                'fb_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
