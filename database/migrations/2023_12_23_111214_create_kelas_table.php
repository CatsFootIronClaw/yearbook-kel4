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
        Schema::create('kelas', function (Blueprint $table) {
            $table->integer('id_kelas', true)->nullable(false);
            $table->integer('id_jurusan');
            $table->integer('id_walas');
            $table->integer('id_sekolah');
            $table->string('nama_kelas', 60)->nullable(false);
            $table->string('slogan', 60)->nullable(false);



            $table->foreign('id_walas')
                ->references('id_karyawan')->on('karyawan')
                ->onUpdate('cascade')->onDelete('cascade');
                
            $table->foreign('id_sekolah')
                ->references('id_sekolah')->on('sekolah')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_jurusan')
                ->references('id_jurusan')->on('jurusan')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
