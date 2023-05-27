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
        Schema::create('pengambilan_obats', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ambil')->unique();
            $table->date('tgl');
            $table->bigInteger('nip');
            $table->bigInteger('no_resep');
            $table->string('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengambilan_obats');
    }
};
