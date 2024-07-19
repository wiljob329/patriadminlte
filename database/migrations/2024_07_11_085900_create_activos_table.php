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
            $table->foreignId('ubicacion_id')->constrained('ubicaciones');
            $table->string('codigo_interno');
            $table->text('descripcion')->nullable();
            $table->text('observacion')->nullable();
            $table->foreignId('forma_adquisicion_id')->constrained('formas_adquisiciones');
            $table->date('fecha_adquisicion');
            $table->string('nro_documento_factura');
            $table->foreignId('estado_activo_id')->constrained('estados_activos');
            $table->foreignId('condicion_fisica_id')->constrained('condiciones_fisicas');
            $table->foreignId('marca_id')->constrained('marcas');
            $table->string('modelo')->nullable();
            $table->string('serial')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('nro_orden_pago')->nullable();
            $table->date('inicio_garantia')->nullable();
            $table->date('fin_garantia')->nullable();
            $table->foreignId('color_id')->constrained('colores');
            $table->foreignId('categoria_especifica_id')->constrained('categorias_especificas');
            $table->foreignId('responsable_id')->constrained('responsables');
            $table->date('fecha_baja')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
