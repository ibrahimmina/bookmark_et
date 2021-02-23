<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function wishes(){
        return $this->hasMany('App\Wish');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }
    
    public function orders(){
        return $this->hasMany('App\Order', 'seller_user_id', 'id');
    }

    public function addresses(){
        return $this->hasMany('App\Address', 'user_id', 'id');
    }

    public function WishedBooks(){
        return $this->hasManyThrough(
            'App\Book',
            'App\Wish',
            'user_id', // Foreign key on Orders table...
            'id', // Foreign key on Books table...
            'id', // Local key on Orders table...
            'book_id' // Local key on Product table...
        );
    }

    public function SellingBooks(){
        return $this->hasManyThrough(
            'App\Book',
            'App\Product',
            'user_id', // Foreign key on Orders table...
            'id', // Foreign key on Books table...
            'id', // Local key on Orders table...
            'book_id' // Local key on Product table...
        );
    }

    public function BuyingBooks(){
        return $this->hasManyThrough(
            'App\Book',
            'App\Order',
            'buyer_user_id', // Foreign key on Orders table...
            'id', // Foreign key on Books table...
            'id', // Local key on Orders table...
            'book_id' // Local key on Product table...
        );
    }
}
