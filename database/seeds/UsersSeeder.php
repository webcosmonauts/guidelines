<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'dorkyboi',
            'email' => 'admin@guidelines.test',
            'password' => Hash::make('admin'),
        ]);
    }
}
