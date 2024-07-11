<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class condiciones_fisicas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('condiciones_fisicas')->insert([
            [
                'condicion' => 'ÓPTIMO',
            ],
            [
                'condicion' => 'BUENO',
            ],
            [
                'condicion' => 'REGULAR',
            ],
            [
                'condicion' => 'DETERIORADO',
            ],
            [
                'condicion' => 'AVERIADO',
            ],
            [
                'condicion' => 'CHATARRA',
            ],
            [
                'condicion' => 'NO OPERATIVO',
            ],
            [
                'condicion' => 'OTRA CONDICIÓN FÍSICA',
            ],
        ]);
    }
}
