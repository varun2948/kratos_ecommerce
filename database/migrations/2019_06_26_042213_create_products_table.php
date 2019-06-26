<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',255);
            $table->longText('short_description');
            $table->string('feature_image',255);
            $table->string('price',255);
            $table->string('discounted_price',255);
            $table->string('review',255);
            $table->longText('specific_description');
            $table->longText('long_description');
            $table->integer('each_feature_product');
            $table->string('discounted_percentage');
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
        Schema::dropIfExists('products');
    }
}
