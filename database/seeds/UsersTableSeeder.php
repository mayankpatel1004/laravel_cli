<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => "Mayank Patel",
            'email' => "mayank@yopmail.com",
            'api_token' => base64_encode('mayank@yopmail.com'),
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Mayank IT",
            'email' => "mayankp@yopmail.com",
            'api_token' => base64_encode('mayankp@yopmail.com'),
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => "Mayank Solution",
            'email' => "mayankps@yopmail.com",
            'api_token' => base64_encode('mayankps@yopmail.com'),
            'password' => bcrypt('password'),
        ]);
    }
}
