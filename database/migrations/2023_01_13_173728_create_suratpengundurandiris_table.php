<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratpengundurandiris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('tanggal_pengunduran')->nullable();
            $table->string('penerima_surat')->nullable();
            $table->string('tempat_penerbit')->nullable();
            $table->string('waltu_terbitan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suratpengundurandiris');
    }
};
