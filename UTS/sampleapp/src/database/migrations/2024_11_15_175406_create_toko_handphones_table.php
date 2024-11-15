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
        Schema::create('toko_handphones', function (Blueprint $table) {
            $table->id();
            $table->string('Tipe');
            $table->string('Merk');
            $table->decimal('Harga', 10, 2);
            $table->string('Warna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toko_handphones');
    }
};
