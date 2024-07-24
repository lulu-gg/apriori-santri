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
            $table->integer('x1')->after('tanggal_lahir')->default(0); // Tes Tulis
            $table->integer('x2')->after('x1')->default(0); // Surah Pilihan
            $table->integer('x3')->after('x2')->default(0); // Menulis Pegon
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
            $table->dropColumn(['x1', 'x2', 'x3']);
        });
    }
}
