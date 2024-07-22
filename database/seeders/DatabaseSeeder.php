<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Activo;
use App\Models\Responsable;
use App\Models\Ubicacion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(cargos_seeder::class);
        $this->call(categorias_generales_seeder::class);
        $this->call(subcategorias_seeder::class);
        $this->call(categorias_especificas_seeder::class);
        $this->call(colores_seeder::class);
        $this->call(condiciones_fisicas_seeder::class);
        $this->call(estados_activos_seeder::class);
        $this->call(formas_adquisiciones_seeder::class);
        $this->call(gerencias_seeder::class);
        $this->call(divisiones_seeder::class);
        $this->call(marcas_seeder::class);
        $this->call(monedas_seeder::class);
        $this->call(sedes_seeder::class);
        $this->call(unidades_administrativas_seeder::class);
        //\App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);

        Ubicacion::factory(5)->create();
        Responsable::factory(10)
                    ->has(Activo::factory()->count(2))
                    ->create();
        // \App\Models\Responsable::factory(100)->create();
        // \App\Models\Customer::factory(1000)->create();
    }
}
