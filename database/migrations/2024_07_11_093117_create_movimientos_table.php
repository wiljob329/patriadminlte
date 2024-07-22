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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activo_id')->constrained('activos');
            $table->date('fecha_movimiento');
            $table->foreignId('viejo_custodio')->constrained('responsables');
            $table->foreignId('nuevo_custodio')->constrained('responsables');
            $table->string('analista_administrativo');
            $table->string('motivo_movimiento')->nullable();
            $table->text('descripcion')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
