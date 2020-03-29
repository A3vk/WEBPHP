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
            ['name' => Crypt::encrypt('ICT in Bedrijf'), 'period' => Crypt::encrypt(1), 'block' => Crypt::encrypt(1), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(2), 'grade' => Crypt::encrypt(6.74), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Orientatie'), 'period' => Crypt::encrypt(1), 'block' => Crypt::encrypt(1), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(2), 'grade' => Crypt::encrypt('Voldaan'), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Programmeren 2'), 'period' => Crypt::encrypt(2), 'block' => Crypt::encrypt(2), 'total_credits' => Crypt::encrypt(4), 'obtained_credits' => Crypt::encrypt(4), 'grade' => Crypt::encrypt(7), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Databases 2'), 'period' => Crypt::encrypt(2), 'block' => Crypt::encrypt(2), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(2), 'grade' => Crypt::encrypt(7.1), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Programmeren 3'), 'period' => Crypt::encrypt(3), 'block' => Crypt::encrypt(3), 'total_credits' => Crypt::encrypt(4), 'obtained_credits' => Crypt::encrypt(0), 'grade' => Crypt::encrypt(4.8), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Presenteren en Samenwerken'), 'period' => Crypt::encrypt(3), 'block' => Crypt::encrypt(3), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(2), 'grade' => Crypt::encrypt('Voldaan'), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Programmeren 4'), 'period' => Crypt::encrypt(4), 'block' => Crypt::encrypt(4), 'total_credits' => Crypt::encrypt(4), 'obtained_credits' => Crypt::encrypt(4), 'grade' => Crypt::encrypt(7), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Rapporteren'), 'period' => Crypt::encrypt(4), 'block' => Crypt::encrypt(4), 'total_credits' => Crypt::encrypt(1), 'obtained_credits' => Crypt::encrypt(1), 'grade' => Crypt::encrypt(8.4), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Programmen 5'), 'period' => Crypt::encrypt(1), 'block' => Crypt::encrypt(5), 'total_credits' => Crypt::encrypt(3), 'obtained_credits' => Crypt::encrypt(3), 'grade' => Crypt::encrypt(9.3), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Algoritmiek'), 'period' => Crypt::encrypt(1), 'block' => Crypt::encrypt(5), 'total_credits' => Crypt::encrypt(3), 'obtained_credits' => Crypt::encrypt(3), 'grade' => Crypt::encrypt(8.01), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Programmeren 6'), 'period' => Crypt::encrypt(2), 'block' => Crypt::encrypt(6), 'total_credits' => Crypt::encrypt(3), 'obtained_credits' => Crypt::encrypt(3), 'grade' => Crypt::encrypt(8.2), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('Gesprekken'), 'period' => Crypt::encrypt(2), 'block' => Crypt::encrypt(6), 'total_credits' => Crypt::encrypt(1), 'obtained_credits' => Crypt::encrypt(1), 'grade' => Crypt::encrypt('Voldaan'), 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('WebJs'), 'period' => Crypt::encrypt(3), 'block' => Crypt::encrypt(7), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(0), 'grade' =>  null, 'created_at' => Now(), 'updated_at' => Now() ],
            ['name' => Crypt::encrypt('WebPHP'), 'period' => Crypt::encrypt(3), 'block' => Crypt::encrypt(7), 'total_credits' => Crypt::encrypt(2), 'obtained_credits' => Crypt::encrypt(0), 'grade' => null, 'created_at' => Now(), 'updated_at' => Now() ],
        ]);
    }
}
