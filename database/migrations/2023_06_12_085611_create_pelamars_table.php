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
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('tekanan_darah');
            $table->string('per_tekanan_darah');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('suhu_tubuh');
            $table->string('buta_warna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelamars');
    }
};
