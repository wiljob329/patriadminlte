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
            //$table->id();
            $table->unsignedBigInteger('codigo');
            $table->primary('codigo');
            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('act_marcas');
            $table->string('modelo', 50);
            $table->string('serial', 30);
            $table->unsignedBigInteger('condicion_id');
            $table->foreign('condicion_id')->references('id')->on('act_condiciones');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('act_colores');
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('act_tipos');
            $table->string('descripcion', 100)->nullable();
            $table->string('observacion', 100)->nullable();
            $table->unsignedBigInteger('adquisicion_id');
            $table->foreign('adquisicion_id')->references('id')->on('act_adquisiciones');
            $table->date('fecha_adquisicion');
            $table->text('moneda');
            $table->string('proveedor', 50);
            $table->string('nro_factura', 50);
            $table->string('costo', 20);
            $table->string('nro_orden', 50);
            $table->date('inicio_garantia');
            $table->date('fin_garantia');
            //$table->unsignedBigInteger('categoriagen_id');
            //$table->foreign('categoriagen_id')->references('id')->on('act_catgenerales');
            $table->unsignedBigInteger('categoriaesp_id');
            $table->foreign('categoriaesp_id')->references('id')->on('act_catespecificas');
            $table->boolean('asignado')->default(false);
            $table->boolean('estado')->default(true);
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
