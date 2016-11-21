<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCalloutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callouts', function (Blueprint $table) {
          $table->increments('id')->unique();
          $table->text('bgImg');
          $table->text('bodyHtml');
          $table->text('calloutOrder');
          $table->text('status');
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
        Schema::table('callouts', function (Blueprint $table) {
            //
        });
    }
}
