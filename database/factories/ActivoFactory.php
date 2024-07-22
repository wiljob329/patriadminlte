<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activo>
 */
class ActivoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'sede_id' => 1,
            'unidad_administrativa_id' => fake()->numberBetween(1, 9),
            'ubicacion_id' => Ubicacion::inRandomOrder()->first()->id,
            'codigo_interno' => fake()->ean8(),
            'descripcion' => fake()->sentence(),
            'observacion' => fake()->sentence(),
            'forma_adquisicion_id' => fake()->numberBetween(1,16),
            'fecha_adquisicion' => fake()->date(),
            'nro_documento_factura' => fake()->ean8(),
            'estado_activo_id' => fake()->numberBetween(1, 8),
            'condicion_fisica_id' => fake()->numberBetween(1,8),
            'marca_id' => 1,
            'modelo' => fake()->numerify('modelo-######'),
            'serial' => fake()->numerify('sn-#######'),
            'proveedor' => fake()->company(),
            'nro_orden_pago' => fake()->numerify('orden-#######'),
            'inicio_garantia' => fake()->date(),
            'fin_garantia' => fake()->date(),
            'color_id' => fake()->numberBetween(1,45),
            'categoria_especifica_id' => fake()->numberBetween(1,1588),
        ];
    }
}
