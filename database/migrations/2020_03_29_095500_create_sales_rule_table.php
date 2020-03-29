<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_rule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->text('description');
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->integer('is_active');
            $table->string('coupon_code', 255);
            $table->float('subtotal');
            $table->integer('qty');
            $table->integer('discount_type');
            $table->float(('amount'));
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_rule');
    }
}
