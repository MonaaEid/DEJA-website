<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dish_name')->unique();
            $table->text('dish_image');
            $table->string('dish_type');
            $table->mediumText('dish_description');
            $table->float('dish_price');
            $table->enum('dish_special',['special', 'regular'])->default('regular');
            // $table->enum('type')->default('regular');
            //foreign key
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');

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
        Schema::dropIfExists('dishes');
    }
}
