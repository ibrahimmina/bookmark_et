<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function book(){
        return $this->hasManyThrough(
            'App\Book',
            'App\Product',
            'id', // Foreign key on Orders table...
            'id', // Foreign key on Books table...
            'product_id', // Local key on Orders table...
            'book_id' // Local key on Product table...
        );
    }
}
