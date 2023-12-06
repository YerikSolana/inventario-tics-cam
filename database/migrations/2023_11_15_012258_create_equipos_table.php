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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id('equipoid');
            $table->text('evidenciafrontal')->nullable();
            $table->text('evidencialateral')->nullable();
            $table->text('evidenciatrasera')->nullable();
            $table->string('serie');
            $table->string('nni');
            $table->string('usuariodom');
            $table->string('hostname');
            $table->string('ip');
            $table->string('mac');
            $table->unsignedBigInteger('soid');
            $table->foreign('soid')->references('soid')->on('sistemasoperativos')->onDelete('cascade');
            $table->unsignedBigInteger('modeloid');
            $table->foreign('modeloid')->references('modeloid')->on('modelos')->onDelete('cascade');
            $table->smallInteger('availability')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
