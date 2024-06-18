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
        Schema::create('act_catespecificas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('act_catgenerales')->onDelete('cascade');
            $table->integer('subcategoria_id');
            $table->foreign('subcategoria_id')->references('id')->on('act_subcat')->onDelete('cascade');
            $table->text('descripcion');
            $table->text('codigo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('act_catespecificas');
    }
};
