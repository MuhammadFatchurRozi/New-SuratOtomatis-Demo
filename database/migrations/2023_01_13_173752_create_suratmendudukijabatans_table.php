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
        Schema::create('suratmendudukijabatans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat_pernyataan')->nullable();
            $table->string('nama_penanda_tangan')->nullable();
            $table->string('jabatan_penanda_tangan')->nullable();
            $table->string('nama_yang_menyatakan')->nullable();
            $table->string('nip')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('golongan')->nullable();
            $table->string('jabatan_yang_menyatakan')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->string('tanggal_penulisan')->nullable();
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
        Schema::dropIfExists('suratmendudukijabatans');
    }
};
