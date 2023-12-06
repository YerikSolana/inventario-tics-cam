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
        Schema::create('registros', function (Blueprint $table) {
            $table->id('registroid');
            $table->unsignedBigInteger('equipoid');
            $table->foreign('equipoid')->references('equipoid')->on('equipos')->onDelete('cascade');
            $table->unsignedBigInteger('responsableid');
            $table->foreign('responsableid')->references('responsableid')->on('responsables')->onDelete('cascade');
            $table->unsignedBigInteger('oficinaid');
            $table->foreign('oficinaid')->references('oficinaid')->on('oficinas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
