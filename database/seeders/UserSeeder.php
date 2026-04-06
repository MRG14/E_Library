<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin
        User::create([
            'name' => 'Admin Elibrary',
            'email' => 'adminlibrary@admin.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'avatar_path' => 'avatars/sample.jpg'
        ]);

        //user
        User::create([
            'name' => 'Ghilman Muhammad',
            'email' => 'testuser123@user.com',
            'password' => Hash::make('123456'),
            'role' => 'user',
            'avatar_path' => 'avatars/sample.jpg'
        ]);
    }
}
