<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                  ->on('users')->onDelete('cascade');
            $table->string('email');
            $table->integer('phone')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')
                  ->on('addresses')->onDelete('cascade');
            $table->enum('type', ['cod', 'prepaid']);
            $table->integer('discount')->unsigned()->nullable();
            $table->string('discount_code')->nullable();
            $table->tinyInteger('tax');
            $table->integer('subtotal')->unsigned();
            $table->integer('total')->unsigned();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('orders');
    }
}
