<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'UserSeeder',
            'email' => 'asif@gmail.com',
            'password' => '1234567',
            'dob' => '2000-01-01',
            'gender' => 'male',
            'role' => 'admin',
            'status' => 'verified'
        ]);
        DB::table('users')->insert([
            'name' => 'asif1',
            'email' => 'asif1@gmail.com',
            'password' => '1234567',
            'dob' => '2000-01-01',
            'gender' => 'male',
            'role' => 'vendor',
            'status' => 'verified'
        ]);
        DB::table('users')->insert([
            'name' => 'asif2',
            'email' => 'asif2@gmail.com',
            'password' => '1234567',
            'dob' => '2000-01-01',
            'gender' => 'male',
            'role' => 'user',
            'status' => 'verified'
        ]);
    }
}
