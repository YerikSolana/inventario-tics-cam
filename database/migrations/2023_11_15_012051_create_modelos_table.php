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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id('modeloid');
            $table->string('nombremodelo', 100);
            $table->unsignedBigInteger('marcaid');
            $table->foreign('marcaid')->references('marcaid')->on('marcas')->onDelete('cascade');
            $table->unsignedBigInteger('tipomodeloid');
            $table->foreign('tipomodeloid')->references('tipomodeloid')->on('tipomodelos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos');
    }
};
