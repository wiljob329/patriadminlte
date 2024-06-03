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
        Schema::create('resp_responsables', function (Blueprint $table) {
            $table->integer('cedula')->primary();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('correo', 50);
            $table->string('cargo', 50);
            $table->unsignedBigInteger('gerencia');
            $table->unsignedBigInteger('division');
            $table->string('condicion', 50);
            $table->foreign('gerencia')->references('nombre')->on('gerencias');
            $table->foreign('division')->references('nombre')->on('divisionescd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resp_responsables');
    }
};
