<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VerifyHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        if(Auth::check()){
            
            $user_id = Auth::user()->id;

            $UserShopProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.quantity' , 'products.book_id', 'products.user_id')
            ->where('products.user_id', $user_id)
            ->get();
    
            $UserWishProducts = \App\Wish::select('book_id')
            ->where('user_id', $user_id)
            ->get();            

            $ShopProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.quantity' , 'products.book_id')
            ->get();
    
            $WishProducts = \App\Wish::join('books', 'wishes.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'wishes.book_id')
            ->get();

        }else {
            
            $UserShopProducts = "";

            $UserWishProducts = "";
            
            $ShopProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.quantity' , 'products.book_id')
            ->get();
    
            $WishProducts = \App\Wish::join('books', 'wishes.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'wishes.book_id')
            ->get();
        }
        return view('pages.album', ['ShopProducts' => $ShopProducts, 'WishProducts' => $WishProducts, 'UserShopProducts' => $UserShopProducts, 'UserWishProducts' => $UserWishProducts]);
    }
}
