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
        Schema::create('seragam', function (Blueprint $table) {
            $table->integer('id_sergam', true)->nullable(false);
            $table->integer('id_sekolah');
            $table->string('nama_seragam', 60)->nullable(false);
            $table->text('foto_seragam')->nullable(false);
            $table->string('hari', 60)->nullable(false);

            $table->foreign('id_sekolah')   
                ->references('id_sekolah')->on('sekolah')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seragam');
    }
};
