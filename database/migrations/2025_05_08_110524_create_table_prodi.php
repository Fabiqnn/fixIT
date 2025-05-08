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
        Schema::create('table_prodi', function (Blueprint $table) {
            $table->id('prodi_id');
            $table->string('prodi_kode', 10)->unique();
            $table->string('prodi_nama', 100);
            $table->unsignedBigInteger('jurusan_id')->index();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('jurusan_id')->on('table_jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_prodi');
    }
};
