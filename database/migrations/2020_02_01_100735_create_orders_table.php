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
            $table->bigIncrements('id');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->bigInteger('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books');

            $table->integer('quantity')->unsigned();
            
            $table->bigInteger('seller_user_id')->unsigned();
            $table->foreign('seller_user_id')->references('id')->on('users');

            $table->bigInteger('buyer_user_id')->unsigned();
            $table->foreign('buyer_user_id')->references('id')->on('users');

            $table->bigInteger('buyer_address_id')->unsigned();
            $table->foreign('buyer_address_id')->references('id')->on('addresses');

            $table->integer('total_amount');
            $table->string('payment_method');

            $table->boolean('shipped')->default(false);
            $table->string('error')->nullable();

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
