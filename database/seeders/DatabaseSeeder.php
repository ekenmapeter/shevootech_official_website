<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@shevootech.com.ng',
            'phone' => '07031633778',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Ekenma Peter Nwabueze',
            'email' => 'ekenma@shevootech.com.ng',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);
    }
}
