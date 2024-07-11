<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estados_activos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estados_activos')->insert([
            [
                'estado' => 'EN USO',
            ],
            [
                'estado' => 'EN COMODATO',
            ],
            [
                'estado' => 'EN ARRENDAMIENTO',
            ],
            [
                'estado' => 'EN ALMACÉN O DEPÓSITO PARA SU ASIGNACIÓN',
            ],
            [
                'estado' => 'ASIGNACIÓN O ADSCRIPCIÓN',
            ],
            [
                'estado' => 'CONCESIÓN',
            ],
            [
                'estado' => 'PERMISO',
            ],
            [
                'estado' => 'AUTORIZACIÓN',
            ],
        ]);
    }
}
