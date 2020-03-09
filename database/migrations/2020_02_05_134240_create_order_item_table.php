<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            //foreign keys
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('dish_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            $table->foreign('dish_id')->references('id')->on('dishes');
            //end of foreign keys
            $table->integer('quantity')->default('1');
            $table->integer('total_price'); //calculated

            // date

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
        Schema::dropIfExists('order_item');
    }
}
