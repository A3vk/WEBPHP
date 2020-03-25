<?php

use Illuminate\Database\Seeder;

class TagTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_test')->insert([
            //ict in bedrijf
            ['test_id' => 1, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 1, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 2, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 2, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 3, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 3, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 4, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 4, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],

            //orientatie
            ['test_id' => 5, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 6, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 7, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 8, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 9, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 10, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 11, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 12, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 13, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 14, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 15, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 16, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 17, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 18, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],

            //Programmeren 2
            ['test_id' => 19, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 19, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],

            //databases 2 
            ['test_id' => 20, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 20, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],

            //programeren 3
            ['test_id' => 21, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 21, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],

            //presenteren en samenwerken
            ['test_id' => 22, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 22, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 23, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 23, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 24, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 24, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 25, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 25, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 26, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 26, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 27, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 27, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 28, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 28, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 4
            ['test_id' => 29, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 29, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 29, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],

            //Rapporteren
            ['test_id' => 30, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 30, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 31, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 31, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 32, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 32, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 5
            ['test_id' => 33, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 33, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 33, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],

            //Algoritmiek
            ['test_id' => 34, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 34, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 35, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 35, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 36, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 36, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 37, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 37, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 38, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 38, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 39, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 39, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 40, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 40, 'tag_id' => 4, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 41, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 41, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],

            //Programeren 6
            ['test_id' => 42, 'tag_id' => 6, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 42, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],

            //Gesprekken
            ['test_id' => 43, 'tag_id' => 2, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 43, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],

            //WebJs
            ['test_id' => 44, 'tag_id' => 1, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 44, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],

            //WebPHP
            ['test_id' => 45, 'tag_id' => 3, 'created_at' => Now(), 'updated_at' => Now()],
            ['test_id' => 45, 'tag_id' => 5, 'created_at' => Now(), 'updated_at' => Now()],
        ]);
        
    }
}
