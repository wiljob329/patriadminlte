<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class colores_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('colores')->insert([
            [
                'color' => 'NEGRO',
            ],
            [
                'color' => 'AZUL',
            ],
            [
                'color' => 'PALO ROSA',
            ],
            [
                'color' => 'NARANJA',
            ],
            [
                'color' => 'VERDE',
            ],
            [
                'color' => 'BEIGE',
            ],
            [
                'color' => 'CROMÁTICO',
            ],
            [
                'color' => 'VINOTINTO',
            ],
            [
                'color' => 'GRIS / NEGRO',
            ],
            [
                'color' => 'PLATEADO',
            ],
            [
                'color' => 'BEIGE ASTRALIA',
            ],
            [
                'color' => 'PLATEADO FERROSO',
            ],
            [
                'color' => 'PERLA',
            ],
            [
                'color' => 'BEIGE OLÍMPICO',
            ],
            [
                'color' => 'ARENA MTALIZADO',
            ],
            [
                'color' => 'PLATA',
            ],
            [
                'color' => 'ROJO',
            ],
            [
                'color' => 'AMARILLO',
            ],
            [
                'color' => 'BEIGE DUNA',
            ],
            [
                'color' => 'MARRÓN / NEGRO',
            ],
            [
                'color' => 'AZUL / BEIGE',
            ],
            [
                'color' => 'MARRÓN / BEIGE',
            ],
            [
                'color' => 'BLANCO',
            ],
            [
                'color' => 'GRIS',
            ],
            [
                'color' => 'MARRÓN',
            ],
            [
                'color' => 'CAOBA',
            ],
            [
                'color' => 'CARAMELO',
            ],
            [
                'color' => 'VERDE / BLANCO',
            ],
            [
                'color' => 'AZUL / GRIS',
            ],
            [
                'color' => 'AZUL / BLANCO',
            ],
            [
                'color' => 'NEGRO / PLATEADO',
            ],
            [
                'color' => 'AMARILLO / NEGRO',
            ],
            [
                'color' => 'AMARILLO / BLANCO',
            ],
            [
                'color' => 'ROJO / BLANCO',
            ],
            [
                'color' => 'NEVERI',
            ],
            [
                'color' => 'MADERA CLARO',
            ],
            [
                'color' => 'MADERA / BLANCO',
            ],
            [
                'color' => 'GRIS / BLANCO',
            ],
            [
                'color' => 'BEIGE / BLANCO',
            ],
            [
                'color' => 'STUCCO',
            ],
            [
                'color' => 'VERDE / BLANCO',
            ],
            [
                'color' => 'AZUL / NEGRO',
            ],
            [
                'color' => 'NEGRO / NARANJA',
            ],
            [
                'color' => 'NEGRO / MOSTAZA',
            ],
            [
                'color' => 'VERDE / NEGRO',
            ],
        ]);
    }
}
