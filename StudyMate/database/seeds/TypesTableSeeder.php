<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['name' => 'tentamen', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'assessment', 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => 'assignment', 'created_at' => Now(), 'updated_at' => Now()]
        ]);
    }
}
