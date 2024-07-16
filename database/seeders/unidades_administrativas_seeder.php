<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unidades_administrativas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unidades_administrativas')->insert([
            [
                'nombre' => 'GERENCIA GENERAL DE GESTION ADMINISTRATIVA',
            ],
            [
                'nombre' => 'GERENCIA GENERAL DE GESTION COMERCIAL',
            ],
            [
                'nombre' => 'GERENCIA GENERAL INTEGRAL DE OBRAS',
            ],
            [
                'nombre' => 'GERENCIA GENERAL DE INGENIERIA Y OPERACIONES',
            ],
        ]);
    }
}
