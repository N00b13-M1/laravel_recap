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
        DB::table('users')->insert([
            'name' => 'PersonA',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('molengeek')
        ]);
        DB::table('users')->insert([
            'name' => 'PersonB',
            'email' => 'webmaster@gmail.com',
            'password' => Hash::make('molengeek')
        ]);
        DB::table('users')->insert([
            'name' => 'PersonC',
            'email' => 'user@gmail.com',
            'password' => Hash::make('molengeek')
        ]);
    }
}
