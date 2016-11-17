<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('videoType')->unique();
            $table->string('videoUrl');
            $table->int('videoOrder');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Videos');
    }
}
