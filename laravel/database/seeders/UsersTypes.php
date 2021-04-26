<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'role' => '1',
            'password' => Hash::make('admin')
        ]);

        DB::table('users')->insert([
            'name' =>'gestionnaire',
            'email' => 'gestionnaire@gmail.com',
            'role' => '2',
            'password' => Hash::make('gestionnaire')
        ]);

        DB::table('users')->insert([
            'name' =>'user',
            'email' => 'user@gmail.com',
            'role' => '3',
            'password' => Hash::make('user')
        ]);
    }
}
