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
        Schema::create('perifericos', function (Blueprint $table) {
            $table->id('perifericoid');
            $table->string('serie');
            $table->unsignedBigInteger('modeloid');
            $table->foreign('modeloid')->references('modeloid')->on('modelos')->onDelete('cascade');
            $table->unsignedBigInteger('tipoperifericoid');
            $table->foreign('tipoperifericoid')->references('tipoperifericoid')->on('tipoperifericos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perifericos');
    }
};
