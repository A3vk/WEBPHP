<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username'=> 'Admin', 'password' => Hash::make('Admin123'), 'role' => 'admin', 'remember_token' => null, 'created_at' => Now(), 'updated_at' => Now()],
            ['username'=> 'Deadline', 'password' => Hash::make('Deadline123'), 'role' => 'deadline', 'remember_token' => null, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
