<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSalesRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_rule', function (Blueprint $table) {
            if (!Schema::hasColumn('sales_rule', 'gift_id')) {
                $table->string('gift_id')->nullable()->default(0);
            }
            if (!Schema::hasColumn('sales_rule', 'operator')) {
                $table->string('operator')->nullable()->default(1);
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
        //
    }
}
