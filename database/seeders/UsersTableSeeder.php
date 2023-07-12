<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin

        DB::table('users')->insert([
//user
[
    'name' => 'User',
    'username' =>'user',
    'email' =>'user@gmail.com',
    'password'=> Hash::make('123456789'),
    'role'  => 'admin',
    'status' => 'active',
],


            [
                'name' => 'Admin',
                'username' =>'admin',
                'email' =>'admin@gmail.com',
                'password'=> Hash::make('123456789'),
                'role'  => 'admin',
                'status' => 'active',
            ],

            //Super Admin
           [
            'name' => 'SuperAdmin',
                'username' =>'superadmin',
                'email' =>'superadmin@gmail.com',
                'password'=> Hash::make('123456789'),
                'role'  => 'superadmin',
                'status' => 'active',
           ],

        ]);
    }
}
