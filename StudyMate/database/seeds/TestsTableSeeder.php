<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tests')->insert([
            //ict in bedrijf
            ['type_id' => 3, 'module_id' => 1, 'name' => Crypt::encrypt('ICT-inventarisatie'), 'file' => null, 'grade' => Crypt::encrypt('7.45'), 'date' => Crypt::encrypt('2018-9-16 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => Crypt::encrypt('App ontwerp'), 'file' => null, 'grade' => Crypt::encrypt('6.80'), 'date' => Crypt::encrypt('2018-9-26 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => Crypt::encrypt('Bedrijfs bezoek'), 'file' => null, 'grade' => Crypt::encrypt('6.01'), 'date' => Crypt::encrypt('2018-9-26 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => Crypt::encrypt('Pecha kucha'), 'file' => null, 'grade' => Crypt::encrypt('6.70'), 'date' => Crypt::encrypt('2018-9-26 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //orientatie
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Methodenkaart'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-8-31 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('MoodBoard'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-9-1 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Duurzaamheid'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-9-12 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Film Idee'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-9-12 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Intervieuw vragen'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-4 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Filmscript'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-1 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('HRM verslag'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-9-16 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Planning'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-1 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Verslag Interview'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-2 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Vaceture'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-16 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Hrm presentatie'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-7 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Film'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-7 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Uren regestratie'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-7 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => Crypt::encrypt('Beoordelingsformulier film'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2018-10-7 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //programeren 2
            ['type_id' => 2, 'module_id' => 3, 'name' => Crypt::encrypt('Dungeon crawler'), 'file' => null, 'grade' => Crypt::encrypt('7.00'), 'date' => Crypt::encrypt('2019-1-18 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //databases 2
            ['type_id' => 1, 'module_id' => 4, 'name' => Crypt::encrypt('Tentamen'), 'file' => null, 'grade' => Crypt::encrypt('7.10'), 'date' => Crypt::encrypt('2019-1-8 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 3
            ['type_id' => 1, 'module_id' => 5, 'name' => Crypt::encrypt('Tentamen'), 'file' => null, 'grade' => Crypt::encrypt('4.80'), 'date' => Crypt::encrypt('2019-3-27 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //presentere en samenwerken
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Samenwerkings afspraken'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-2-4 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Blog'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-2-27 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Voormeting'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-2-13 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Duo presentatie'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-4-14 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Terugblik presentatie'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-4-14 14:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Eindpresentatie'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-4-14 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => Crypt::encrypt('Eindopdracht'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2019-3-28 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 4
            ['type_id' => 2, 'module_id' => 7, 'name' => Crypt::encrypt('Snake'), 'file' => null, 'grade' => Crypt::encrypt('7.0'), 'date' => Crypt::encrypt('2019-6-17 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Rapporteren
            ['type_id' => 3, 'module_id' => 8, 'name' => Crypt::encrypt('Hoofdvraag en inhoudsopgaven'), 'file' => null, 'grade' => Crypt::encrypt('voldaan'), 'date' => Crypt::encrypt('2019-5-6 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 8, 'name' => Crypt::encrypt('Hoofdstukken'), 'file' => null, 'grade' => Crypt::encrypt('voldaan'), 'date' => Crypt::encrypt('2019-5-12 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 8, 'name' => Crypt::encrypt('Eindopdracht'), 'file' => null, 'grade' => Crypt::encrypt('8.40'), 'date' => Crypt::encrypt('2019-5-22 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 5
            ['type_id' => 2, 'module_id' => 9, 'name' => Crypt::encrypt('Ninja Mannager'), 'file' => null, 'grade' => Crypt::encrypt('9.30'), 'date' => Crypt::encrypt('2019-11-01 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Algoritmiek
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 1'), 'file' => null, 'grade' => Crypt::encrypt('9.50'), 'date' => Crypt::encrypt('2019-9-9 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 2'), 'file' => null, 'grade' => Crypt::encrypt('10.00'), 'date' => Crypt::encrypt('2019-9-17 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 3'), 'file' => null, 'grade' => Crypt::encrypt('7.70'), 'date' => Crypt::encrypt('2019-9-23 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 4'), 'file' => null, 'grade' => Crypt::encrypt('8.40'), 'date' => Crypt::encrypt('2019-9-30 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 5'), 'file' => null, 'grade' => Crypt::encrypt('8.60'), 'date' => Crypt::encrypt('2019-10-7 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 6'), 'file' => null, 'grade' => Crypt::encrypt('9.60'), 'date' => Crypt::encrypt('2019-10-21 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => Crypt::encrypt('Week 7'), 'file' => null, 'grade' => Crypt::encrypt('1.70'), 'date' => Crypt::encrypt('2019-10-21 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 1, 'module_id' => 10, 'name' => Crypt::encrypt('Tentamen'), 'file' => null, 'grade' => Crypt::encrypt('8.10'), 'date' => Crypt::encrypt('2019-11-01 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 6
            ['type_id' => 2, 'module_id' => 11, 'name' => Crypt::encrypt('Boef'), 'file' => null, 'grade' => Crypt::encrypt('8.20'), 'date' => Crypt::encrypt('2020-3-26 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Gesprekken
            ['type_id' => 3, 'module_id' => 12, 'name' => Crypt::encrypt('Huiswerk'), 'file' => null, 'grade' => Crypt::encrypt('1.00'), 'date' => Crypt::encrypt('2019-12-2 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 2, 'module_id' => 12, 'name' => Crypt::encrypt('Assessment'), 'file' => null, 'grade' => Crypt::encrypt('Voldaan'), 'date' => Crypt::encrypt('2020-1-20 23:00:00'), 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //WebJs
            ['type_id' => 2, 'module_id' => 13, 'name' => Crypt::encrypt('Invy'), 'file' => null, 'grade' => null, 'date' => Crypt::encrypt('2020-3-30 07:00:00'), 'is_complete' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //WebPHP
            ['type_id' => 2, 'module_id' => 14, 'name' => Crypt::encrypt('StudyMate'), 'file' => null, 'grade' => null, 'date' => Crypt::encrypt('2020-3-30 07:00:00'), 'is_complete' => false, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
