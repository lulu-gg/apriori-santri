<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfidenceToAprioriResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apriori_results', function (Blueprint $table) {
            if (!Schema::hasColumn('apriori_results', 'confidence')) {
                $table->float('confidence')->nullable()->after('support');
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
        Schema::table('apriori_results', function (Blueprint $table) {
            if (Schema::hasColumn('apriori_results', 'confidence')) {
                $table->dropColumn('confidence');
            }
        });
    }
}
