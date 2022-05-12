<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role'=> 'admin',
            'user_id' => 1,
            'created_at' =>now()
        ]);
        DB::table('roles')->insert([
            'role'=> 'webmaster',
            'user_id' => 2,
            'created_at' =>now()
        ]);
        DB::table('roles')->insert([
            'role'=> 'user',
            'user_id' => 3,
            'created_at' =>now()
        ]);
    }
}
