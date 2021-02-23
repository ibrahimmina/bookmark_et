<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function book(){
        return $this->hasMany('App\Book', 'book_id', 'id');
    }
}
