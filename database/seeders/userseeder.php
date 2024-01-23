<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "hanni fauza tamara",
            'email' => 'hanifauza.t@gmail.com',
            'password' => Hash::make('87654321'),
            // 'level' => 'admin',
			]);
    }
}