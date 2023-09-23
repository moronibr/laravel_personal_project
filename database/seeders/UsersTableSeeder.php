<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
          

            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ],
             
            [
                'name' => 'Manager',
                'username' => 'manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('manager123'),
                'role' => 'manager',
            ],

            [
                'name' => 'Assistant',
                'username' => 'assistant',
                'email' => 'assistant@gmail.com',
                'password' => Hash::make('assistant123'),
                'role' => 'assistant',
            ]

        ]);
    }
}
