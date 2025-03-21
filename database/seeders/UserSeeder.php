<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // [
            //     'name' => 'Admin',
            //     'username' => 'admin',
            //     'email' => 'admin@gmail.com',
            //     'role' => 'admin',
            //     'status' => 'active',
            //     'password' => bcrypt('password'),
            // ],
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                'email' => 'vendor',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password'),
            ]
        ]);
    }
}
