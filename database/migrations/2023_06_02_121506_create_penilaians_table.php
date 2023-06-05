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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ortu_id');
            $table->foreign('ortu_id')->references('id')->on('ortus');
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id')->references('id')->on('files');
            $table->double('nilai_gaji_ayah');
            $table->double('nilai_gaji_ibu');
            $table->double('nilai_pendidikan_ayah');
            $table->double('nilai_pendidikan_ibu');
            $table->double('nilai_jumlah_tanggungan');
            $table->double('nilai_jumlah_file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
