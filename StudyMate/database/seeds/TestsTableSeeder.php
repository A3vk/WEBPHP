<?php

use Illuminate\Database\Seeder;

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
            ['type_id' => 3, 'module_id' => 1, 'name' => 'ICT-inventarisatie', 'file' => null, 'grade' => '7.45', 'date' => '2018-9-16 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => 'App ontwerp', 'file' => null, 'grade' => '6.80', 'date' => '2018-9-26 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => 'Bedrijfs bezoek', 'file' => null, 'grade' => '6.01', 'date' => '2018-9-26 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 1, 'name' => 'Pecha kucha', 'file' => null, 'grade' => '6.70', 'date' => '2018-9-26 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //orientatie
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Methodenkaart', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-8-31 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'MoodBoard', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-9-1 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Duurzaamheid', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-9-12 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Film Idee', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-9-12 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Intervieuw vragen', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-4 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Filmscript', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-1 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'HRM verslag', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-9-16 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Planning', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-1 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Verslag Interview', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-2 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Vaceture', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-16 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Hrm presentatie', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-7 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Film', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-7 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Uren regestratie', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-7 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 2, 'name' => 'Beoordelingsformulier film', 'file' => null, 'grade' => 'Voldaan', 'date' => '2018-10-7 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //programeren 2 
            ['type_id' => 2, 'module_id' => 3, 'name' => 'Dungeon crawler', 'file' => null, 'grade' => '7.00', 'date' => '2019-1-18 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //databases 2 
            ['type_id' => 1, 'module_id' => 4, 'name' => 'Tentamen', 'file' => null, 'grade' => '7.10', 'date' => '2019-1-8 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 3
            ['type_id' => 1, 'module_id' => 5, 'name' => 'Tentamen', 'file' => null, 'grade' => '4.80', 'date' => '2019-3-27 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //presentere en samenwerken
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Samenwerkings afspraken', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-2-4 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Blog', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-2-27 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Voormeting', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-2-13 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Duo presentatie', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-4-14 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Terugblik presentatie', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-4-14:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Eindpresentatie', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-4-14 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 6, 'name' => 'Eindopdracht', 'file' => null, 'grade' => 'Voldaan', 'date' => '2019-3-28 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 4
            ['type_id' => 2, 'module_id' => 7, 'name' => 'Snake', 'file' => null, 'grade' => '7.0', 'date' => '2019-6-17 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Rapporteren
            ['type_id' => 3, 'module_id' => 8, 'name' => 'Hoofdvraag en inhoudsopgaven', 'file' => null, 'grade' => 'voldaan', 'date' => '2019-5-6 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 8, 'name' => 'Hoofdstukken', 'file' => null, 'grade' => 'voldaan', 'date' => '2019-5-12 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 8, 'name' => 'Eindopdracht', 'file' => null, 'grade' => '8.40', 'date' => '2019-5-22 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 5
            ['type_id' => 2, 'module_id' => 9, 'name' => 'Ninja Mannager', 'file' => null, 'grade' => '9.30', 'date' => '2019-11-01 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Algoritmiek
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week1', 'file' => null, 'grade' => '9.50', 'date' => '2019-9-9 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 2', 'file' => null, 'grade' => '10.00', 'date' => '2019-9-17 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 3', 'file' => null, 'grade' => '7.70', 'date' => '2019-9-23 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 4', 'file' => null, 'grade' => '8.40', 'date' => '2019-9-30 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 5', 'file' => null, 'grade' => '8.60', 'date' => '2019-10-7 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 6', 'file' => null, 'grade' => '9.60', 'date' => '2019-10-21 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 3, 'module_id' => 10, 'name' => 'Week 7', 'file' => null, 'grade' => '1.70', 'date' => '2019-10-21 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 1, 'module_id' => 10, 'name' => 'Tentamen', 'file' => null, 'grade' => '8.10', 'date' => '2019-11-01 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 6
            ['type_id' => 2, 'module_id' => 11, 'name' => 'Boef', 'file' => null, 'grade' => '8.20', 'date' => '2020-3-26 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Gesprekken
            ['type_id' => 3, 'module_id' => 12, 'name' => 'Huiswerk', 'file' => null, 'grade' => '1.00', 'date' => '2019-12-2', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['type_id' => 2, 'module_id' => 12, 'name' => 'Assessment', 'file' => null, 'grade' => 'Voldaan', 'date' => '2020-1-20 23:00:00', 'is_complete' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //WebJs
            ['type_id' => 2, 'module_id' => 13, 'name' => 'Invy', 'file' => null, 'grade' => null, 'date' => '2020-3-30 07:00:00', 'is_complete' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //WebPHP
            ['type_id' => 2, 'module_id' => 14, 'name' => 'StudyMate', 'file' => null, 'grade' => null, 'date' => '2020-3-30 07:00:00', 'is_complete' => false, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
