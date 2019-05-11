<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Alex Green',
            'email' => 'alex@gmail.com',
            'password' => md5('123456789'),
        ]);
        \App\User::create([
            'name' => 'Flin SG',
            'email' => 'flin@gmail.com',
            'password' => md5('123456789'),
        ]);
        \App\User::create([
            'name' => 'Ues Skip',
            'email' => 'ues@gmail.com',
            'password' => md5('123456789'),
        ]);
    }
}
