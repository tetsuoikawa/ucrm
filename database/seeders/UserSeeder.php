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
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => '2test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => '3test3',
            'email' => 'test3@test.com',
            'password' => Hash::make('password123'),
        ]);
        DB::table('users')->insert([
            'name' => '4test4',
            'email' => 'test4@test.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
