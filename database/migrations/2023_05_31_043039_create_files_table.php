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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('file_kk', 100)->nullable();
            $table->string('file_ktp', 100)->nullable();
            $table->string('file_kip', 100)->nullable();
            $table->string('file_foto', 100)->nullable();
            $table->string('file_sertifikat', 100)->nullable();
            $table->string('file_khs', 100)->nullable();
            $table->foreignIdFor(User::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
