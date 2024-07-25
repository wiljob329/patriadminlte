<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipo_activos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_activos')->insert([
            ['tipo' => 'Mobiliario y Equipo de Oficina Gerencia Ministerio del Ambiente'],
            ['tipo' => 'Acondicionamiento Instalaciones Propias'],
            ['tipo' => 'Computación'],
            ['tipo' => 'Edificaciones'],
            ['tipo' => 'Edificios y Construcciones'],
            ['tipo' => 'Equipo de Computación Aporte Caf'],
            ['tipo' => 'Equipo de Interconexión de Redes'],
            ['tipo' => 'Equipo Planta de Tratamiento'],
            ['tipo' => 'Equipos de Computación'],
            ['tipo' => 'Equipos de Computación Rec. Hidroven'],
            ['tipo' => 'Equipos de Computación Rec. Minist. Ambiente'],
            ['tipo' => 'Equipos de Transmisión'],
            ['tipo' => 'Estudios y Proyectos'],
            ['tipo' => 'Maq.y Equipos Pta.Tratamiento'],
            ['tipo' => 'Maquinarias y Equipos Planta de Tratamiento'],
            ['tipo' => 'Mejoras a la Propiedad Arrendada'],
            ['tipo' => 'Mobiliario y Equipo de Oficina'],
            ['tipo' => 'Mobiliario y Equipo Rec.Hidroven'],
            ['tipo' => 'Mobiliario y Equipos Medicos'],
            ['tipo' => 'Otras Maq. Y Equipos Rec. Marn'],
            ['tipo' => 'Otras Maquinarias y Equipos'],
            ['tipo' => 'Otras Maquinarias y Equipos Aporte CAF'],
            ['tipo' => 'Otras Maquinarias y Equipos Aporte Gobernación'],
            ['tipo' => 'Otras Maquinarias y Equipos/AP. Gob'],
            ['tipo' => 'Otros Equipos de Comunicación'],
            ['tipo' => 'Otros Equipos de Comunicación y/o de Transmisión Aporte CAF'],
            ['tipo' => 'Paquetes y Programas de Computación'],
            ['tipo' => 'Reparacion Mayor Maquinaria y Equipo'],
            ['tipo' => 'Reparación mayor otras maquinarias y equipos'],
            ['tipo' => 'Reparacion Mejoras Obras'],
            ['tipo' => 'Reparaciones Mayores Maquinarias'],
            ['tipo' => 'Reparaciones Mayores Planta de Tratamiento'],
            ['tipo' => 'Reparaciones Mayores Vehículos'],
            ['tipo' => 'Reparaciones Vehículos'],
            ['tipo' => 'Total Equipos de Transmisión'],
            ['tipo' => 'Total Equipos Interconexión de Redes'],
            ['tipo' => 'Vehículo'],
            ['tipo' => 'Vehículos / Aporte CAF'],
            ['tipo' => 'Vehículos FCI'],
            ['tipo' => 'Vehículos Laee'],
            ['tipo' => 'Vehículos/Fides Gobernación'],
        ]);
    }
}
