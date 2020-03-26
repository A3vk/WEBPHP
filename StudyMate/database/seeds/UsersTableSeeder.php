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
        DB::table('users')->insert([
            ['username'=> 'Admin', 'password' => '$2y$10$DsIZl6.3ObKjuJttergtB.dTzU7dposbPdXikD38EWoD1wJdtvIye', 'role' => 'admin', 'remember_token' => null, 'created_at' => Now(), 'updated_at' => Now()],
            ['username'=> 'Deadline', 'password' => '$2y$10$d6XLe2q1RWE7SS5KSXx7suUOcWRXOcH.t.p80A2WvKySOn5BLFsn2', 'role' => 'deadline', 'remember_token' => null, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
