<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveXColumnsFromSantrisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('santris', function (Blueprint $table) {
            if (Schema::hasColumn('santris', 'x1')) {
                $table->dropColumn('x1');
            }
            if (Schema::hasColumn('santris', 'x2')) {
                $table->dropColumn('x2');
            }
            if (Schema::hasColumn('santris', 'x3')) {
                $table->dropColumn('x3');
            }
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
            $table->integer('x1')->default(0);
            $table->integer('x2')->default(0);
            $table->integer('x3')->default(0);
        });
    }
}
