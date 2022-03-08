<?php

namespace Database\Seeders;

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
        DB::table('users')->delete();

        DB::table('users')->insert(
            array(
                array(
                    'name' => 'sushmita',
                    'email' => 'sushmita@gmail.com',
                    'password' => bcrypt('password'),

                ),
                array(
                    'name' => 'sushmita1',
                    'email' => 'sushmita1@gmail.com',
                    'password' => Hash::make('password'),

                ),
                array(
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('password'),

                )

            ));
    }

}
