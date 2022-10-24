<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'DatabaseSeeder',
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
        DB::table('ticket_bookings')->insert([
            'ticket_booking_transport_id' => 1,
            'ticket_booking_date' => '2000-01-01',
            'ticket_booking_type' => 'dont know',
        ]);
        DB::table('transports')->insert([
            'transport_id' => 1,
            'transport_date' => '2000-01-01',
            'transport_type' => '4 CHAKKA',
            'transport_name' => 'ENA PARIBAHAN',
        ]);
        DB::table('seats')->insert([
            'seat_transport_id' => 1,
            'seat_no' => 'D7',
            'seat_type' => 'vanga seat',
        ]);
    }
}
