<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tag', function (Blueprint $table) {
            $table->integer('news_id')->unsigned();
            $table->integer('tag_id')->unsigned();
        });
        Schema::table('news_tag', function($table) {
            $table->foreign('news_id')->references('id')->on('news');
            $table->foreign('tag_id')->references('id')->on('tag');
            $table->index(['news_id', 'tag_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_tag');
    }
}
