<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            // $table->timestamp('date');
            $table->string('title');
            $table->string('unit');
            $table->integer('number');
            $table->integer('unit_price');
            $table->integer('payment');
            // $table->bigInteger('category_id')->unsigned()->nullable();
            // $table->foreign('category_id')
            //     ->references('id')->on('categories')->onDelete('SET NULL');
            $table->text('description');
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
        Schema::dropIfExists('buys');
    }
}
