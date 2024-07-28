<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKriteriaToSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->integer('tes_tulis')->after('tanggal_lahir')->default(0); // Tes Tulis
            $table->integer('surah_pilihan')->after('tes_tulis')->default(0); // Surah Pilihan
            $table->integer('menulis_pegon')->after('surah_pilihan')->default(0); // Menulis Pegon
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->dropColumn(['tes_tulis', 'surah_pilihan', 'menulis_pegon']);
        });
    }
}
