<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('goodreads_book_id')->nullable();

            $table->text('title');
            
            $table->text('isbn')->nullable();
            $table->text('isbn13')->nullable();
            $table->text('asin')->nullable();
            $table->text('kindle_asin')->nullable();
            $table->text('marketplace_id')->nullable();
            
            $table->text('country_code')->nullable();
            
            $table->text('image_url')->nullable();
            $table->text('small_image_url')->nullable();

            $table->integer('publication_year')->nullable();
            $table->integer('publication_month')->nullable();
            $table->integer('publication_day')->nullable();
            $table->text('publisher')->nullable();

            $table->text('language_code')->nullable();
            $table->boolean('is_ebook')->nullable();

            $table->longText('description')->nullable();

            $table->integer('num_pages')->nullable();
            $table->text('format')->nullable();

            $table->text('edition_information')->nullable();

            

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
        Schema::dropIfExists('books');
    }
}
