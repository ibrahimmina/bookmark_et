<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public function products(){
        return $this->hasMany('App\Product', 'book_id', 'id');
    }

    public function authors(){
        return $this->hasManyThrough(
            'App\Author',
            'App\BookAuthor',
            'book_id', 
            'id', 
            'id', 
            'author_id' 
        );
    }
}
