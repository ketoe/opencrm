<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Marcin',
            'surname' => 'Stefanowski',
            'email' => 'stefanowski94@gmail.com',
            'password' => Hash::make('stefanowski94'),
            'admin' => true
        ]);
    }
}
