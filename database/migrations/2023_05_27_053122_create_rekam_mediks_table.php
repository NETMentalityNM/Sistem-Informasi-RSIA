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
        Schema::create('rekam_mediks', function (Blueprint $table) {
            $table->id();
            $table->integer('no_rekmed')->unique();
            $table->bigInteger('no_kartu');
            $table->date('tgl_berobat');
            $table->string('diagnosa');
            $table->bigInteger('nip');
            $table->bigInteger('polis_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_mediks');
    }
};
