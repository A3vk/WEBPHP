<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'makkelijk', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'moeilijk', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'veel werk', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'weining werk', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'leuk', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'niet leuk', 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
