<?php

use Illuminate\Database\Seeder;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            ['first_name' => 'Jacqueline', 'last_name' => 'van de Ven', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Tom', 'last_name' => 'Houben', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Ronald', 'last_name' => 'van Rietschoten', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Marcel', 'last_name' => 'Sluijmers', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Ruth', 'last_name' => 'de Vijlder', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Eric', 'last_name' => 'Kuijpers', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Roland', 'last_name' => 'van Gogh', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Marc', 'last_name' => 'Peters', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Luc', 'last_name' => 'Claessens', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Suzan', 'last_name' => 'van Rietschoten', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Jantien', 'last_name' => 'Donkers', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Bart ', 'last_name' => 'Gelens', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Eric', 'last_name' => 'Melsbach', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Bart', 'last_name' => 'Mutsaers', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Jasper', 'last_name' => 'van Rosmalen', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Lesley', 'last_name' => 'de Ruyter', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Ger', 'last_name' => 'Saris', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Anne', 'last_name' => 'de Leeuw', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Jos', 'last_name' => 'van Weert', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Stijn', 'last_name' => 'Smulders', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Bob', 'last_name' => 'van der Putten', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Vincent', 'last_name' => 'Kreuzen', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Jurgen', 'last_name' => 'Doreleijers', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Ernst', 'last_name' => 'de Ridder', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Dirk', 'last_name' => 'Pesman', 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => 'Julian', 'last_name' => 'van der Kleijn', 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}