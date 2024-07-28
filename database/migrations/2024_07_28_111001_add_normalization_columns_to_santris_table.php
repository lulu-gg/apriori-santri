<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNormalizationColumnsToSantrisTable extends Migration
{
    public function up()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->float('normalized_tes_tulis')->nullable();
            $table->float('normalized_surah_pilihan')->nullable();
            $table->float('normalized_menulis_pegon')->nullable();
        });
    }

    public function down()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->dropColumn(['normalized_tes_tulis', 'normalized_surah_pilihan', 'normalized_menulis_pegon']);
        });
    }
}
