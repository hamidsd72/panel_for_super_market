<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactorsTable extends Migration
{
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->boolean('payment_status')->default(false);
            $table->boolean('payment_method')->nullable();
            $table->integer('status')->default(0);
            $table->bigInteger('total_amount')->nullabe();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('factors');
    }
}
