<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

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
            ['first_name' => Crypt::encrypt('Jacqueline'), 'last_name' => Crypt::encrypt('van de Ven'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Tom'), 'last_name' => Crypt::encrypt('Houben'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Ronald'), 'last_name' => Crypt::encrypt('van Rietschoten'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Marcel'), 'last_name' => Crypt::encrypt('Sluijmers'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Ruth'), 'last_name' => Crypt::encrypt('de Vijlder'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Eric'), 'last_name' => Crypt::encrypt('Kuijpers'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Roland'), 'last_name' => Crypt::encrypt('van Gogh'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Marc'), 'last_name' => Crypt::encrypt('Peters'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Luc'), 'last_name' => Crypt::encrypt('Claessens'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Suzan'), 'last_name' => Crypt::encrypt('van Rietschoten'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Jantien'), 'last_name' => Crypt::encrypt('Donkers'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Bart'), 'last_name' => Crypt::encrypt('Gelens'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Eric'), 'last_name' => Crypt::encrypt('Melsbach'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Bart'), 'last_name' => Crypt::encrypt('Mutsaers'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Jasper'), 'last_name' => Crypt::encrypt('van Rosmalen'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Lesley'), 'last_name' => Crypt::encrypt('de Ruyter'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Ger'), 'last_name' => Crypt::encrypt('Saris'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Anne'), 'last_name' => Crypt::encrypt('de Leeuw'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Jos'), 'last_name' => Crypt::encrypt('van Weert'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Stijn'), 'last_name' => Crypt::encrypt('Smulders'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Bob'), 'last_name' => Crypt::encrypt('van der Putten'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Vincent'), 'last_name' => Crypt::encrypt('Kreuzen'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Jurgen'), 'last_name' => Crypt::encrypt('Doreleijers'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Ernst'), 'last_name' => Crypt::encrypt('de Ridder'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Dirk'), 'last_name' => Crypt::encrypt('Pesman'), 'created_at' => Now(), 'updated_at' => Now()],
            ['first_name' => Crypt::encrypt('Julian'), 'last_name' => Crypt::encrypt('van der Kleijn'), 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
