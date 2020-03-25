<?php

use Illuminate\Database\Seeder;

class ModuleTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('module_teacher')->insert([
            //ICT in bedrijf
            ['module_id' => 1, 'teacher_id' => 1, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 2, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 3, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 4, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 5, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 6, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 7, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 1, 'teacher_id' => 8, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Orientatie
            ['module_id' => 2, 'teacher_id' => 9, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 10, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 11, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 12, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 2, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 5, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 13, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 14, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 15, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 16, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 17, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 7, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 1, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 18, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 2, 'teacher_id' => 19, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //programmeren 2
            ['module_id' => 3, 'teacher_id' => 19, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 3, 'teacher_id' => 17, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 3, 'teacher_id' => 14, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 3, 'teacher_id' => 15, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Databases 2
            ['module_id' => 4, 'teacher_id' => 14, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 4, 'teacher_id' => 19, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 4, 'teacher_id' => 7, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 4, 'teacher_id' => 5, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 4, 'teacher_id' => 2, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 3 
            ['module_id' => 5, 'teacher_id' => 19, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 5, 'teacher_id' => 17, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 5, 'teacher_id' => 15, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Presenteren en samenwerken
            ['module_id' => 6, 'teacher_id' => 11, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 6, 'teacher_id' => 4, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 4
            ['module_id' => 7, 'teacher_id' => 12, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 7, 'teacher_id' => 19, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 7, 'teacher_id' => 17, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Rapporteren
            ['module_id' => 8, 'teacher_id' => 11, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 8, 'teacher_id' => 26, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 5
            ['module_id' => 9, 'teacher_id' => 20, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 9, 'teacher_id' => 13, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 9, 'teacher_id' => 3, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 9, 'teacher_id' => 21, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Algoritmiek
            ['module_id' => 10, 'teacher_id' => 22, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 10, 'teacher_id' => 6, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 10, 'teacher_id' => 23, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 10, 'teacher_id' => 24, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 6
            ['module_id' => 11, 'teacher_id' => 20, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //Gesprekken
            ['module_id' => 12, 'teacher_id' => 10, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 12, 'teacher_id' => 5, 'is_coordinator' => false, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 12, 'teacher_id' => 25, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 12, 'teacher_id' => 26, 'is_coordinator' => true, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],

            //WebJs
            ['module_id' => 13, 'teacher_id' => 20, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],

            //WebPHP
            ['module_id' => 14, 'teacher_id' => 15, 'is_coordinator' => true, 'is_my_teacher' => true, 'created_at' => Now(), 'updated_at' => Now()],
            ['module_id' => 14, 'teacher_id' => 20, 'is_coordinator' => false, 'is_my_teacher' => false, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
    }
}
