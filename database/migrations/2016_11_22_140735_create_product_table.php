<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('headlines');
            $table->text('salesMessage');
            $table->text('offerExpire');
            $table->text('listPrice');
            $table->text('salesPrice');
            $table->text('magentoSku');
            $table->text('magentoAddCarUrl');
            $table->text('amazonUrl');
            $table->text('product-image');
            $table->text('loginUrl');
            $table->text('activationUrl');
            $table->text('productDescriptionHtml');
            $table->boolean('status');
            $table->text('visibilityStatus');
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
        Schema::dropIfExists('product');
    }
}
