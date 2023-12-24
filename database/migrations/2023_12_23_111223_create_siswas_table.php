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
        Schema::create('siswa', function (Blueprint $table) {
            $table->integer('id_siswa', true)->nullable(false);
            $table->integer('id_kelas');
            $table->string('nama_siswa', 60)->nullable(false);
            $table->date('tanggal_lahir_siswa')->nullable(false);
            $table->string('tempat_lahir_siswa', 30)->nullable(false);
            $table->text('foto_siswa')->nullable(false);
            $table->string('quotes', 255)->nullable(false);
            $table->string('sosmed', 60)->nullable(false);

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
        Schema::dropIfExists('siswa');
    }
};
