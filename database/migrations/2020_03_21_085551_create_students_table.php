<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('avatar', 255)->nullable();
            $table->string('fullname', 100);
            $table->string('username', 150)->unique();
            $table->unsignedInteger('gender')->nullable();
            $table->string('phone_number', 45);
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            // Base configurations for all tables
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
