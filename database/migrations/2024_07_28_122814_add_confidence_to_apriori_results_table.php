<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('apriori_results', function (Blueprint $table) {
            $table->float('confidence')->after('support');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('apriori_results', function (Blueprint $table) {
            $table->dropColumn('confidence');
        });
    }
};
