<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantrisTable extends Migration
{
    public function up()
    {
        Schema::create('santris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('x1'); // Tes Tulis
            $table->integer('x2'); // Surah Pilihan
            $table->integer('x3'); // Menulis Pegon
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('santris');
    }
}
