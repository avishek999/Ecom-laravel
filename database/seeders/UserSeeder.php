<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => Str::random(10), // Use Str::random instead of str_random.
            'email' => Str::random(10).'@gmail.com', // Use Str::random instead of str_random.
            'password' => Hash::make('12345')
        ]);

        // DB::table('users')->insert([
        //     'name'=>'luffy',
        //     'email'=>'luffy@gmail.com',
        //     'password'=>Hash::make('12345')
        // ]);
    }
}
