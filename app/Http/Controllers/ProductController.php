<?php

namespace App\Http\Controllers;

use App\Product;
use App\Address;
use App\Book;
use App\Author;
use App\BookAuthor;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use Storage;
use Log;
use File;
use Notification;
use App\Notifications\ProductCreateNotification;
use Illuminate\Notifications\Notifiable;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $PageSettings = array('Pagelocation' => 'Selling Books', 'PageSubtitle' => 'Selling Books');
  
            $Books = Auth::user()->SellingBooks()->get();
            return view('pages.bookcardcollection', ['Books' => $Books, 'PageSettings' => $PageSettings]);

        } catch (Exception $e) {
            report($e);
        }  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /* $Book = \App\Book::select('id','title', 'image_url', 'description')->where('id',$id)->first(); */

 /*        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Select Address');

        return view('pages.addresscardcollection', ['PageSettings' => $PageSettings, 'request' => $request]);  */


        //return view('pages.productcreate', ['Book' => $Book]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postProductCreateStep1(Request $request)
    {

        $book = new \App\Book;
        
        $book->id = request('book_id');
        $book->image_url = request('image_url');
        $book->title = request('title');   

        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Select Address');
        
        return view('pages.productcreate', ['PageSettings' => $PageSettings, 'book' => $book]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $user_id = Auth::user()->id;

        if (request('missing_pages')!== null){
            $missing_pages = 1;
        }else{
            $missing_pages = 0;
        }
        
        $product = new \App\Product;

        $product->book_id = request('book_id');	
        $product->user_id = $user_id;
        $product->seller_address_id = request('seller_address_id'); 	
        $product->price	= request('price');
        $product->featured = 0;	
        $product->quantity = request('quantity');	
        $product->book_type	= request('book_type');
        $product->book_status = request('book_status');	
        $product->missing_pages = $missing_pages;
        $product->save();

        $files = $request->allFiles();

        $x=1;

        foreach($files as $file){
            $path = $file->move(public_path('productimages/' . $product->id), $x . "." . $file->getClientOriginalExtension());  
            $x++;
        }

        //$user = User::find($product->user_id);

        Auth::user()->notify(new ProductCreateNotification($product));

        return redirect('products/' . $product->id); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*     public function getbyuserid()
    {
        try {
            $PageSettings = array('Pagelocation' => 'Shop Books', 'PageSubtitle' => 'Shop Books');

            $Products = \App\Product::where('user_id', Auth::user()->id)
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url' , 'books.id as id')
            ->get();;
    
            return view('pages.bookcardcollection', ['PageSettings' => $PageSettings, 'Books' => $Products]);

        } catch (Exception $e) {
            report($e);
        }   

    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*     public function search()
    {
        //

        $item = $_GET['search'];

        if (ctype_digit ( $item )) {


            $Products = \App\Book::select('id', 'title', 'isbn', 'isbn13' , 'image_url')
            ->where('isbn','LIKE','%'.$item.'%')
            ->orWhere('isbn13','LIKE','%'.$item.'%')
            ->get();
  
            $Product = $Products->toArray();
            
            $id = array_column($Product, 'id');

            $ShopProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.sell', 'products.quantity' , 'products.book_id')
            ->where('products.sell', 1)
            ->whereIn('books.id', $id)
            ->get();
    
            $WishProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.sell', 'products.quantity' , 'products.book_id')
            ->where('products.sell', 0)
            ->whereIn('books.id', $id)
            ->get();             
            
        } else {


            $Products = \App\BookAuthor::join('books', 'book_authors.book_id', '=', 'books.id')
            ->join('authors', 'book_authors.author_id', '=', 'authors.id')
            ->select('authors.author_name AS author_name','books.title AS title', 'books.isbn AS isbn', 'books.isbn13 AS isbn13' , 'books.image_url AS image_url', 'books.id AS id')
            ->where('author_name','LIKE','%'.$item.'%')
            ->orwhere('title','LIKE','%'.$item.'%')
            ->groupBy('books.id')
            ->get();

            $Product = $Products->toArray();
            
            $id = array_column($Product, 'id');

            $ShopProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.sell', 'products.quantity' , 'products.book_id')
            ->where('products.sell', 1)
            ->whereIn('books.id', $id)
            ->get();
    
            $WishProducts = \App\Product::orderBy('products.featured', 'desc')
            ->join('books', 'products.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url', 'products.price', 'products.featured', 'products.sell', 'products.quantity' , 'products.book_id')
            ->where('products.sell', 0)
            ->whereIn('books.id', $id)
            ->get();                        
        }





        return view('pages.search', ['Products' => $Products,'ShopProducts' => $ShopProducts, 'WishProducts' => $WishProducts]);

    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = \App\Product::find($id);
        $address = \App\Address::find($product->seller_address_id);
        $images =   File::allFiles("/bitnami/bookmarket/public/productimages/" . $id); 
        
        return view('pages.productview', ['Product' => $product, 'Address' => $address, 'Images' => $images]);
    }


    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
/*     public function searchGood()
    {

        $item = $_GET['searchGoodReads'];

        $good=simplexml_load_string(file_get_contents('https://www.goodreads.com/search/index.xml?key=C3SzR3sjAlLvr8fx0V3EKA&q=' . str_replace(" ","+",$item)),'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);

        $bool = \App\Book::insert([
                    'goodreads_book_id' => (int) $good->book->id,
                    'title' => (string) $good->book->title,
                    'isbn' => (string) $good->book->isbn,
                    'isbn13' => (string) $good->book->isbn13,
                    'asin' => (string) $good->book->asin,
                    'kindle_asin' => (string) $good->book->kindle_asin,
                    'marketplace_id' => (string) $good->book->marketplace_id,
                    'country_code' => (string) $good->book->country_code,
                    'image_url' => (string) $good->book->image_url,
                    'small_image_url' => (string) $good->book->small_image_url,
                    'publication_year' => (int) $good->book->publication_year,
                    'publication_month' => (int) $good->book->publication_month,
                    'publication_day' => (int) $good->book->publication_day,
                    'publisher' => (string) $good->book->publisher,
                    'language_code' => (string) $good->book->language_code,
                    'is_ebook' => (BOOL) $good->book->is_ebook,
                    'description' => (string) $good->book->description,
                    'num_pages' => (int) $good->book->num_pages,
                    'format' => (string) $good->book->format,
                    'edition_information' => (string) $good->book->edition_information,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s')
                    ]);
        
        if ($bool){
                    $Book = \App\Book::select('books.goodreads_book_id','books.title', 'books.image_url', 'books.small_image_url', 'books.description')
                            ->where('books.goodreads_book_id', $good->book->id)
                            ->first();
        }
        return view('pages.book', ['Book' => $Book]);

    }
 */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = \App\Product::find($id);
        $book = \App\Book::find($product->book_id);
        $images =   File::allFiles("/bitnami/bookmarket/public/productimages/" . $id); 
        
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Select Address');

        return view('pages.productcreate', ['PageSettings' => $PageSettings, 'book' => $book,'Product' => $product, 'Images' => $images]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = \App\Product::find($id);

        $user_id = Auth::user()->id;

        if (request('missing_pages')!== null){
            $missing_pages = 1;
        }else{
            $missing_pages = 0;
        }

        $product->book_id = request('book_id');	
        $product->user_id = $user_id;
        $product->seller_address_id = request('seller_address_id'); 	
        $product->price	= request('price');
        $product->featured = 0;	
        $product->quantity = request('quantity');	
        $product->book_type	= request('book_type');
        $product->book_status = request('book_status');	
        $product->missing_pages = $missing_pages;
        $product->save();

        foreach ($request->deleteimage as $image){
            File::delete(public_path('productimages/') . $product->id . "/" . $image);
        }

        return redirect('products/' . $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::destroy($id);
        File::deleteDirectory("/bitnami/bookmarket/public/productimages/" . $id);
        return redirect(url('/') . '/products');

    }
}
