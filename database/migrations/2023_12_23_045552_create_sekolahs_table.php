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
        Schema::create('sekolah', function (Blueprint $table) {
            $table->integer('id_sekolah', true)->nullable(false);
            $table->string('nama_sekolah', 60)->nullable(false);
            $table->string('alamat_sekolah', 255)->nullable(false);
            $table->text('visi')->nullable(false);
            $table->text('misi')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolah');
    }
};
