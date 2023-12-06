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
        Schema::create('equiposperifericos', function (Blueprint $table) {
            $table->id('equiposperifericoid');
            $table->unsignedBigInteger('equipoid');
            $table->foreign('equipoid')->references('equipoid')->on('equipos')->onDelete('cascade');
            $table->unsignedBigInteger('perifericoid');
            $table->foreign('perifericoid')->references('perifericoid')->on('perifericos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equiposperifericos');
    }
};
