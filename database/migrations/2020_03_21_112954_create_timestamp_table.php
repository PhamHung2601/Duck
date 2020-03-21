<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimestampTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            if (!Schema::hasColumn('banners', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('banners', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });

        Schema::table('blocks', function (Blueprint $table) {
            if (!Schema::hasColumn('blocks', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('blocks', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });

        Schema::table('categories', function (Blueprint $table) {
            if (!Schema::hasColumn('categories', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('categories', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });

        Schema::table('customer_address', function (Blueprint $table) {
            if (!Schema::hasColumn('customer_address', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('customer_address', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('products', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
            }
        });

        Schema::table('news', function (Blueprint $table) {
            if (!Schema::hasColumn('news', 'created_at')) {
                $table->timestamp('created_at')->nullable();
            }
            if (!Schema::hasColumn('news', 'updated_at')) {
                $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('timestamp');
    }
}
