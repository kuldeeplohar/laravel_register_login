<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kuldeep1',
            'email' => 'kuldeep1@email.com',
            'password' => Hash::make('kuldeep1'),
        ]);
        DB::table('users')->insert([
            'name' => 'kuldeep2',
            'email' => 'kuldeep2@email.com',
            'password' => Hash::make('kuldeep2'),
        ]);
    }
}
