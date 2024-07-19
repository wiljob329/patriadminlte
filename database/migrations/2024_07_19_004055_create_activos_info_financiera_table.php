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
        Schema::create('activos_info_financiera', function (Blueprint $table) {
            $table->id();
            $table->foreignId('activo_id')->constrained('activos')->onDelete('cascade');
            $table->decimal('valor_adquisicion', 15,2);
            $table->foreignId('moneda_id')->constrained('monedas');
            $table->decimal('valor_actual', 15,2)->nullable();
            $table->date('fecha_ultima_valuacion')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activos_info_financiera');
    }
};
