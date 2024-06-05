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
            [
                'name' =>'Admin User',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password'=> bcrypt(12345678),
            ],
            [
                'name' =>'Worker User',

                'email' => 'worker@gmail.com',
                'role' => 'worker',
                'status' => 'active',
                'password'=> bcrypt(12345678),
            ],
            [
                'name' =>'User User',
               
                'email' => 'user@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password'=> bcrypt(12345678),
            ]
            ]); 
    }
}
