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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->integer('id_karyawan', true)->nullable(false);
            $table->integer('id_sekolah');
            $table->integer('id_jabatan');
            $table->string('nama_karyawan', 60)->nullable(false);
            $table->date('tanggal_lahir_karyawan')->nullable(false);
            $table->string('tempat_lahir_karyawan', 30)->nullable(false);
            $table->text('foto_karyawan')->nullable(false);

            $table->foreign('id_sekolah')
                ->references('id_sekolah')->on('sekolah')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_jabatan')
                ->references('id_jabatan')->on('jabatan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawan');
    }
};
