<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('goodreads_author_id')->nullable();

            $table->text('author_name');

            $table->integer('fans_count')->nullable();
            $table->integer('author_followers_count')->nullable();

            $table->text('image_url')->nullable();
            $table->text('small_image_url')->nullable();
            $table->text('large_image_url')->nullable();

            $table->longText('about')->nullable();
            $table->longText('influences')->nullable();

            $table->integer('works_count')->nullable();

            $table->enum('gender', ['male', 'female'])->nullable();

            $table->text('hometown')->nullable();

            $table->date('born_at')->nullable();
            $table->date('died_at')->nullable();

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
        Schema::dropIfExists('authors');
    }
}
