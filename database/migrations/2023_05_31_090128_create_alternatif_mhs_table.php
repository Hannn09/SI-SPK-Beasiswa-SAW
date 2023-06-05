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
        Schema::create('alternatif_mhs', function (Blueprint $table) {
            $table->string('nim', 10);
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('alamat', 100);
            $table->string('no_hp', 15);
            $table->string('program_studi', 25);
            $table->string('gender', 15);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->primary('nim');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatif_mhs');
    }
};
