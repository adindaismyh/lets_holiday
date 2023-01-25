<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('letak');
            $table->string('harga_tiket');
            $table->string('fasilitas');
            $table->string('foto_utama');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
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
        Schema::dropIfExists('wisata');
    }
}
