<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemFactorsTable extends Migration
{
    public function up()
    {
        Schema::create('item_factors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('factor_id');
            $table->foreign('factor_id')->references('id')->on('factors')->onDelete('cascade');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->integer('quantity');
            $table->string('product_name');
            $table->bigInteger('price_per');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('item_factors');
    }
}
