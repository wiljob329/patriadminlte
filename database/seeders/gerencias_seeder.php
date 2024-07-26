<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//

class gerencias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gerencias')->insert([
            [
                'gerencia' => 'AUDITORIA INTERNA',
            ],
            [
                'gerencia' => 'CONSULTORIA JURIDICA',
            ],
            [
                'gerencia' => 'GERENCIA DE SEGURIDAD INTEGRAL',
            ],
            [
                'gerencia' => 'GERENCIA DE SEGUIMIENTO Y POLITICA PUBLICAS',
            ],
            [
                'gerencia' => 'GERENCIA DE ADMINISTRACION Y FINANZAS',
            ],
            [
                'gerencia' => 'GERENCIA DE IMAGEN COMUNICACION Y MERCADEO',
            ],
            [
                'gerencia' => 'GERENCIA DE TALENTO HUMANO',
            ],
            [
                'gerencia' => 'GERENCIA DE TECNOLOGIA DE LA INFORMACION',
            ],
            [
                'gerencia' => 'GERENCIA DE PROTECCIÓN AL PATRIMONIO',
            ],
            [
                'gerencia' => 'GERENCIA DE PLANIFICACIÓN PRESUPUESTO Y ORGANIZACIÓN Y SISTEMAS',
            ],
            [
                'gerencia' => 'GERENCIA DE PLANIFICACIÓN COMERCIAL',
            ],
            [
                'gerencia' => 'GERENCIA DE CONTROL Y ADMINISTRACIÓN DE LA INVERSION',
            ],
            [
                'gerencia' => 'GERENCIA DE PARTICIPACIÓN COMUNITARIA',
            ],
            [
                'gerencia' => 'GERENCIA DE POTABILIZACIÓN, TRATAMIENTO Y CALIDAD DEL AGUA',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA LIBERTADOR',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA EL VIGÍA',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA SUCRE',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA SUR DEL LAGO',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA PÁRAMO',
            ],
            [
                'gerencia' => 'GERENCIA OPERATIVA MOCOTÍES',
            ],
            [
                'gerencia' => 'GERENCIA DE FUENTES HIDRICAS',
            ],
        ]);
    }
}
