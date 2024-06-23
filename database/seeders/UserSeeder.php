<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Azhelle Casimiro', 'email' => 'azhelle@example.com', 'password' => Hash::make('password')],
            ['name' => 'Alona Pegarit', 'email' => 'alona@example.com', 'password' => Hash::make('password')],
            ['name' => 'Kayla Acosta', 'email' => 'kayla@example.com', 'password' => Hash::make('password')],
            ['name' => 'Jeonghan Yoon', 'email' => 'jeonghan@example.com', 'password' => Hash::make('password')],
            ['name' => 'Mingyu Kim', 'email' => 'mingyu@example.com', 'password' => Hash::make('password')],
        ]);
    }
}
