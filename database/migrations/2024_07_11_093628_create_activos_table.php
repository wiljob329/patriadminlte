<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sede_id')->constrained('sedes');
            $table->foreignId('unidad_administrativa_id')->constrained('unidades_administrativas');
            $table->string('codigo_interno');
            $table->text('descripcion')->nullable();
            $table->foreignId('forma_adquisicion_id')->constrained('formas_adquisiciones');
            $table->date('fecha_adquisicion');
            $table->string('numero_documento');
            $table->decimal('valor_adquisicion', 10, 2);
            $table->string('moneda')->default('BOLIVAR');
            $table->foreignId('estado_activo_id')->constrained('estados_activos');
            $table->foreignId('condicion_fisica_id')->constrained('condiciones_fisicas');
            $table->foreignId('marca_id')->constrained('marcas');
            $table->string('modelo')->nullable();
            $table->foreignId('color_id')->constrained('colores');
            $table->foreignId('categoria_general_id')->constrained('categorias_generales');
            $table->foreignId('subcategoria_id')->constrained('subcategorias');
            $table->foreignId('categoria_especifica_id')->constrained('categorias_especificas');
            $table->foreignId('depreciacion_id')->constrained('depreciaciones');
            $table->foreignId('desincorporacion_id')->constrained('desincorporaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos');
    }
};
