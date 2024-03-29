<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            TeachersTableSeeder::class,
            TypesTableSeeder::class,
            ModulesTableSeeder::class,
            TestsTableSeeder::class,
            ModuleTeacherTableSeeder::class,
            TagsTableSeeder::class,
            TagTestTableSeeder::class
        ]);
    }
}
