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
        Schema::create('galeri_kelas', function (Blueprint $table) {
            $table->integer('id_galeri_kelas', true)->nullable(false);
            $table->integer('id_kelas');
            $table->string('deskripsi', 60)->nullable(false);
            $table->text('foto_kelas')->nullable(false);

            $table->foreign('id_kelas')
                ->references('id_kelas')->on('kelas')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_kelas');
    }
};
