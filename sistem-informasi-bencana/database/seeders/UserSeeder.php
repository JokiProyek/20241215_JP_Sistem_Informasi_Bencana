<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create default users
        $users = [
            [
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Petugas 1',
                'email' => 'petugas1@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Petugas 2',
                'email' => 'petugas2@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
