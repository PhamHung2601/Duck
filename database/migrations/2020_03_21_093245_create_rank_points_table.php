<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rank_points', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('type')->default(1)->comment('Điểm rank 1: tháng, 2: khóa');
            $table->unsignedInteger('level');
            $table->unsignedInteger('point');
            $table->unsignedInteger('type_id')->nullable()->comment('Id của tháng hoặc khóa');
            $table->unsignedInteger('created_by_id')->default(0);
            $table->string('created_by_name', 100);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            // Base configurations for all tables
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';

            $table->unsignedInteger('student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rank_points');
    }
}
