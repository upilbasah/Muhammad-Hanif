<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder for admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('admin'),
        ]);

        // Seeder for member user
        User::create([
            'name' => 'Member',
            'email' => 'member@example.com',
            'role' => 'member',
            'password' => Hash::make('member'),
        ]);
    }
}