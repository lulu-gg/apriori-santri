<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsInSantrisTable extends Migration
{
    public function up()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->renameColumn('x1', 'tes_tulis');
            $table->renameColumn('x2', 'surah_pilihan');
            $table->renameColumn('x3', 'menulis_pegon');
        });
    }

    public function down()
    {
        Schema::table('santris', function (Blueprint $table) {
            $table->renameColumn('tes_tulis', 'x1');
            $table->renameColumn('surah_pilihan', 'x2');
            $table->renameColumn('menulis_pegon', 'x3');
        });
    }
}
