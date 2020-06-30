<?php

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
        DB::table('users')->insert([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'type' =>'admin',
        'password' => Hash::make('rootadmin')
        ]);
        
        DB::table('users')->insert([
        'name' => 'User',
        'email' => 'user@gmail.com',
        'type' =>'user',
        'password' => Hash::make('rootuser')
        ]);
    }
}
