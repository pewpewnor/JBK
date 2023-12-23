<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'a@b.com',
        //     'password' => '12345',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'customer',
        //     'email' => 'c@b.com',
        //     'password' => '12345',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'a@b.com',
            'password' => '12345',
        ]);

        User::create([
            'name' => 'customer',
            'email' => 'c@b.com',
            'password' => '12345',
        ]);
    }
}
