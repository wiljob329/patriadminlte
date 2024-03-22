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
        Schema::table('act_catespecificas', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('categoria_id')->change();
            $table->foreign('categoria_id')->references('id')->on('act_catgenerales');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('act_catespecificas', function (Blueprint $table) {
            //
            $table->drop('categoria_id');
        });
    }
};
