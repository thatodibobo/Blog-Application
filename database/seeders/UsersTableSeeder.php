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
     *
     * @return void
     */
    public function run()
    {
        //Admin Credentials
        DB::table('admins')->insert([
            'full_name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111111'),
            'status' => 'active', 
        ]);

                //User Credentials
                DB::table('users')->insert([
                    'full_name' => 'Mr. User',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('111111'),
                    'status' => 'active', 
                ]);
    }
}
