<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'writer',
            'email' => 'writer@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'irvan',
            'email' => 'august.ivan20@gmail.com',
            'password' => bcrypt('Allahuakbar1213*'),
            'email_verified_at' =>  now(),
            'remember_token' => Str::random(10)
        ]);
    }
}
