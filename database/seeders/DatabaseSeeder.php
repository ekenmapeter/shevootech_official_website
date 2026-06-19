<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@shevootech.com.ng'],
            [
                'name' => 'Admin',
                'phone' => '07031633778',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'ekenma@shevootech.com.ng'],
            [
                'name' => 'Ekenma Peter Nwabueze',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );
    }
}
