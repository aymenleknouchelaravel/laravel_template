<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'Ahmed',
            'surname' => 'Gsm Mila',
            'phone' => '0549441828',
            'role' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('00000000'),
        ]);
    }
}
