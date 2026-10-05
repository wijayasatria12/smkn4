<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user = [
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('Admin123'),
        ];

            $user = [
            'name' => 'Admin',
            'email' => 'Superadmin@gmail.com',
            'password' => bcrypt('satriaadmin'),
        ];

        User::insert($user);
    }
}