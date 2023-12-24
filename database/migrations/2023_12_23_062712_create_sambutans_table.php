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
        Schema::create('sambutan', function (Blueprint $table) {
            $table->integer('id_sambutan', true)->nullable(false);
            $table->integer('id_sekolah');
            $table->string('nama_staff', 60)->nullable(false);
            $table->string('jabatan_staff', 60)->nullable(false);
            $table->text('kata_sambutan')->nullable(false);
            $table->text('foto_staff')->nullable(false);

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
        Schema::dropIfExists('sambutan');
    }
};
