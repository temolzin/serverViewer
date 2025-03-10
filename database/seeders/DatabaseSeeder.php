<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Joshua Alvarez',
                'email' => 'joshe@gmail.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Mark Zavala',
                'email' => 'marz@burns.com',
                'password' => Hash::make('12345'),
            ],
            [
                'name' => 'Robert Owen',
                'email' => 'robert@gmail.com',
                'password' => Hash::make('12345'),
            ],
        ]);
    }
}
