<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class subcategorias_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategorias')->insert([
            [
                'nombre' => 'Maquinarias_y_equipos_de_construcción_y_mantenimiento',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_para_mantenimiento_de_automotores',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_agrícolas_y_pecuarios',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_de_artes_gráficas_y_reproducción',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_industriales_y_de_taller',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_de_energía',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Maquinarias_y_equipos_de_riego_y_acueductos',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Equipos_de_almacén',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Otras_maquinarias_y_demás_equipos_de_construcción_campo_industria_y_taller',
                'categoria_general_id' => 1,
            ],
            [
                'nombre' => 'Equipos_de_telecomunicaciones',
                'categoria_general_id' => 2,
            ],
            [
                'nombre' => 'Equipos_de_señalamiento',
                'categoria_general_id' => 2,
            ],
            [
                'nombre' => 'Equipos_de_control_de_tráfico_aéreo',
                'categoria_general_id' => 2,
            ],
            [
                'nombre' => 'Equipos_de_correo',
                'categoria_general_id' => 2,
            ],
            [
                'nombre' => 'Otros_equipos_de_comunicaciones_y_de_señalamiento',
                'categoria_general_id' => 2,
            ],
            [
                'nombre' => 'Equipos_medicos_quirúrgicos_dentales_y_veterinarios',
                'categoria_general_id' => 3,
            ],
            [
                'nombre' => 'Otros_Equipos_médicos_quirúrgicos_dentales_y_veterinarios',
                'categoria_general_id' => 3,
            ],
            [
                'nombre' => 'Equipos_cientificos_y_de_laboratorio',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Equipos_de_enseñanza_deporte_y_recreación',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Obras_de_arte',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Libros_y_revistas',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Equipos_religiosos',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Instrumentos_musicales',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Otros_equipos_cientificos_religiosos_de_enseñanza_y_recreación',
                'categoria_general_id' => 4,
            ],
            [
                'nombre' => 'Equipos_y_armamentos_de_defensa_y_seguridad_pública',
                'categoria_general_id' => 5,
            ],
            [
                'nombre' => 'Otros_equipos_para_la_defensa_y_seguridad_pública',
                'categoria_general_id' => 5,
            ],
            [
                'nombre' => 'Mobiliario_y_equipos_de_oficina',
                'categoria_general_id' => 6,
            ],
            [
                'nombre' => 'Equipos_de_procesamiento_de_datos',
                'categoria_general_id' => 6,
            ],
            [
                'nombre' => 'Mobiliario_y_equipos_de_alojamiento',
                'categoria_general_id' => 6,
            ],
            [
                'nombre' => 'Otras_máquinas_muebles_y_demás_equipos_de_oficina_y_de_alojamiento',
                'categoria_general_id' => 6,
            ],
            [
                'nombre' => 'Vehículos_automotores_terrestres',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Equipos_ferroviarios_y_de_cables_aéreos',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Equipos_marítimos_de_transporte',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Equipos_aéreos_de_transporte',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Vehículos_de_tracción_no_motorizados',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Equipos_auxiliares_de_transporte',
                'categoria_general_id' => 7,
            ],
            [
                'nombre' => 'Otros_equipos_de_transporte_tracción_y_elevación',
                'categoria_general_id' => 7,
            ],
        ]);
    }
}
