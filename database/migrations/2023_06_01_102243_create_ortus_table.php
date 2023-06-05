<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ortus', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('nama_ayah', 20);
            $table->string('nama_ibu', 20);
            $table->string('pekerjaan_ayah', 20);
            $table->string('pekerjaan_ibu', 20);
            $table->string('no_hp', 15);
            $table->string('pendidikan_ayah', 20);
            $table->string('pendidikan_ibu', 20);
            $table->integer('gaji_ayah');
            $table->integer('gaji_ibu');
            $table->string('jumlah_tanggungan', 20);
            $table->foreignIdFor(User::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ortus');
    }
};
