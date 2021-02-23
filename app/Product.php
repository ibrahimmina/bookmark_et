<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = ['book_id', 'user_id', 'seller_address_id', 'price', 'featured', 'quantity', 'book_type', 'book_status', 'missing_pages'];
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function book(){
        return $this->belongsTo('App\Book');
    }

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
