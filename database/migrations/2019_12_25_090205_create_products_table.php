<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            
            $table->bigInteger('book_id')->unsigned();
            
            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('seller_address_id')->unsigned();
            $table->foreign('seller_address_id')->references('id')->on('addresses');


            $table->integer('price');
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('quantity')->default(1);

            $table->enum('book_type', ['Original', 'High Copy'])->nullable();
            $table->enum('book_status', ['New', 'Used'])->nullable();

            $table->boolean('missing_pages')->default(false);

            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('users');

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
