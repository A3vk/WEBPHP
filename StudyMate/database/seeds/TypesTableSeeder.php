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
            ['name' => Crypt::encrypt('tentamen'), 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => Crypt::encrypt('assessment'), 'created_at' => Now(), 'updated_at' => Now()],
            ['name' => Crypt::encrypt('assignment'), 'created_at' => Now(), 'updated_at' => Now()]
        ]);
    }
}
