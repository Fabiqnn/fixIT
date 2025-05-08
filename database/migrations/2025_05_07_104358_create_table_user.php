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
        Schema::create('user_table', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id')->index();
            $table->unsignedBigInteger('prodi_id')->index();
            $table->unsignedBigInteger('jurusan_id')->index();
            $table->string('username', 20)->unique();
            $table->string('password');
            $table->string('nama_lengkap', 100);
            $table->string('email', 50);
            $table->string('no_telp', 20);
            $table->string('nip', 15)->unique();
            $table->string('nim', 10)->unique();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('jurusan_id')->on('table_jurusan');
            $table->foreign('prodi_id')->references('prodi_id')->on('table_prodi');
            $table->foreign('level_id')->references('level_id')->on('level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_table');
    }
};
