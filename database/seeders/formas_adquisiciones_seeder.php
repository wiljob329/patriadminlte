<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class formas_adquisiciones_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formas_adquisiciones')->insert([

            [
                'adquisicion' => 'COMPRA',
            ],
            [
                'adquisicion' => 'PERMUTA',
            ],
            [
                'adquisicion' => 'DACIÓN EN PAGO',
            ],
            [
                'adquisicion' => 'DONACIÓN',
            ],
            [
                'adquisicion' => 'TRANSFERENCIA',
            ],
            [
                'adquisicion' => 'EXPROPIACIÓN',
            ],
            [
                'adquisicion' => 'CONFISCACIÓN',
            ],
            [
                'adquisicion' => 'APORTE A CAPITAL SOCIAL',
            ],
            [
                'adquisicion' => 'COMISO',
            ],
            [
                'adquisicion' => 'EMBARGO',
            ],
            [
                'adquisicion' => 'NACIONALIZACIÓN',
            ],
            [
                'adquisicion' => 'FUSION POR INCORPORACIÓN Y/O ABSORCIÓN',
            ],
            [
                'adquisicion' => 'CUSTODIA / ASIGNACIÓN',
            ],
            [
                'adquisicion' => 'CUSTODIA / BIENES SIN TITULARIDAD',
            ],
            [
                'adquisicion' => 'CESION DE DERECHOS',
            ],
            [
                'adquisicion' => 'ADJUDICACION',
            ],
        ]
        );
    }
}
