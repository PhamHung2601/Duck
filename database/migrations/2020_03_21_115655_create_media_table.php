<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            if (!Schema::hasColumn('news', 'media')) {
                $table->text('media')->nullable();
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'media')) {
                $table->text('media')->nullable();
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
        Schema::dropIfExists('media');
    }
}
