<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sedes_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sedes')->insert([
            [
                'sede' => 'PRINCIPAL',
            ],
        ]);
    }
}
