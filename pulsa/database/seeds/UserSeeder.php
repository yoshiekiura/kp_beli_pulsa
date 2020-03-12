<?php

use Illuminate\Database\Seeder;
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
        //
        DB::table('users')->insert([
            'role' => 'admin',
            'no_telpon' => '085706579632',
            'email' => 'tukupulsauntag@gmail.com',
            'password' => Hash::make('bilabong'),
            'remember_token' =>Str::random(60)
        ]);

        DB::table('users')->insert([
            'role' => 'customer',
            'no_telpon' => '085155113160',
            'email' => 'rendycahya6@gmail.com',
            'password' => Hash::make('bilabong'),
            'remember_token' =>Str::random(60)
        ]);
    }
}
