<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // \App\Models\Customer::factory(1000)->create();
    }
}
