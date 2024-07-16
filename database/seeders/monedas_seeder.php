<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class monedas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('monedas')->insert([
            [
                'moneda' => 'BOLÍVAR',
            ],
        ]);
    }
}
