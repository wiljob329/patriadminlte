<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorias_generales_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_generales')->insert([
            [
                'nombre' => 'Maquinaria_y_demás_equipos_de_construcción_campo_industria_y_taller',
            ],
            [
                'nombre' => 'Equipos_de_comunicaciones_y_de_señalamiento',
            ],
            [
                'nombre' => 'Equipos_medicos_quirúrgicos_dentales_y_veterinarios',
            ],
            [
                'nombre' => 'Equipos_cientificos_religiosos_de_enseñanza_y_recreación',
            ],
            [
                'nombre' => 'Equipos_de_defensa_y_seguridad_del_Estado',
            ],
            [
                'nombre' => 'Máquinas_muebles_y_demás_equipos_de_oficina_y_de_alojamiento',
            ],
            [
                'nombre' => 'Equipos_de_transporte_tracción_y_elevación',
            ],
        ]);
    }
}
