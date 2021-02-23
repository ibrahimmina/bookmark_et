<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     if(Auth::check()){
    //         $this->middleware(['auth','verified']);
    //     }
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $PageSettings = array('Pagelocation' => 'Home', 'PageSubtitle' => 'Home');  
  
        $ShopProducts = \App\Product::orderBy('products.featured', 'desc')
        ->join('books', 'products.book_id', '=', 'books.id')
        ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.quantity' , 'books.id as id')
        ->get();
        
        $WishProducts = \App\Wish::join('books', 'wishes.book_id', '=', 'books.id')
        ->select('books.title', 'books.image_url', 'books.id as id')
        ->get();
        
        return view('pages.album', ['PageSettings' => $PageSettings, 'ShopProducts' => $ShopProducts, 'WishProducts' => $WishProducts]);
    }
}
