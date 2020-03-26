<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['name' => 'ICT in Bedrijf', 'period' => 1, 'block' => 1, 'total_credits' => 2, 'obtained_credits' => 2,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Orientatie', 'period' => 1, 'block' => 1, 'total_credits' => 2, 'obtained_credits' => 2,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Programmeren 2', 'period' => 2, 'block' => 2, 'total_credits' => 4, 'obtained_credits' => 4,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Databases 2', 'period' => 2, 'block' => 2, 'total_credits' => 2, 'obtained_credits' => 2,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Programmeren 3', 'period' => 3, 'block' => 3, 'total_credits' => 4, 'obtained_credits' => 0,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Presenteren en Samenwerken', 'period' => 3, 'block' => 3, 'total_credits' => 2, 'obtained_credits' => 2,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Programmeren 4', 'period' => 4, 'block' => 4, 'total_credits' => 4, 'obtained_credits' => 4,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Rapporteren', 'period' => 4, 'block' => 4, 'total_credits' => 1, 'obtained_credits' => 1,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Programmen 5', 'period' => 1, 'block' => 5, 'total_credits' => 3, 'obtained_credits' => 3,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Algoritmiek', 'period' => 1, 'block' => 5, 'total_credits' => 3, 'obtained_credits' => 3,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Algoritmiek', 'period' => 2, 'block' => 6, 'total_credits' => 3, 'obtained_credits' => 3,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'Gesprekken', 'period' => 2, 'block' => 6, 'total_credits' => 1, 'obtained_credits' => 1,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'WebJs', 'period' => 3, 'block' => 7, 'total_credits' => 2, 'obtained_credits' => 0,'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => 'WebPHP', 'period' => 3, 'block' => 7, 'total_credits' => 2, 'obtained_credits' => 0,'created_at' => Now(), 'updated_at' => Now() ],
        ]);
    }
}
