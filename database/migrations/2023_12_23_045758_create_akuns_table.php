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
        Schema::create('akun', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->integer('id_akun', true)->nullable(false);
            $table->integer('id_sekolah');
            $table->string('email', 60)->nullable(false);
            $table->string('username', 60)->nullable(false);
            $table->string('password', 255)->nullable(false);
            $table->enum('role', ['superadmin', 'admin'])->nullable(false);

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
        Schema::dropIfExists('akun');
    }
};
