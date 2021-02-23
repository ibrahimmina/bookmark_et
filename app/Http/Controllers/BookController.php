<?php

namespace App\Http\Controllers;

use App\Product;
use App\Book;
use App\Wish;
use Illuminate\Http\Request;
use File;

use Auth;

use \stdClass;

class BookController extends Controller
{
    public function ValidationRules()
    {
        return [
            'title' => 'string|required' ,
            'isbn' => 'string|nullable' ,
            'isbn13' => 'string|nullable' ,
            'asin' => 'string|nullable' ,
            'kindle_asin' => 'string|nullable' ,
            'marketplace_id' => 'string|nullable' ,
            'country_code' => 'string|nullable' ,
            'image_url' => 'string|nullable' ,
            'small_image_url' => 'string|nullable' ,
            'publication_year' => 'integer|nullable' ,
            'publication_month' => 'integer|nullable' ,
            'publication_day' => 'integer|nullable' ,
            'publisher' => 'string|nullable' ,
            'language_code' => 'string|nullable' ,
            'is_ebook' => 'integer|nullable' ,
            'description' => 'string|nullable' ,
            'num_pages' => 'integer|nullable' ,
            'format' => 'string|nullable' ,
            'edition_information' => 'string|nullable' ,                       
        ];    
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PageSettings = array('Pagelocation' => 'Browse', 'PageSubtitle' => 'Top Books');

        $Books = \App\Book::take(20)->get();

        return view('pages.bookcardcollection', ['PageSettings' => $PageSettings, 'Books' => $Books]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $PageSettings = array('Pagelocation' => 'Add New Book', 'PageSubtitle' => 'Add New Book');

        return view('pages.bookcardcreatecollection', ['PageSettings' => $PageSettings]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validate
        $validator = Validator::make($request->all(), $this->ValidationRules());
        // store
        if ($validator->fails()){
            Log::debug('validation Failed\n');
            Log::debug($validator->errors()->first());
            return redirect(url('/') . '/books/create')
            ->withErrors($validator)
            ->withInput();
        }else{
            $Book = new Book;
           
            $Book->title = $request->title;
            $Book->isbn = $request->isbn;
            $Book->isbn13 = $request->isbn13;
            $Book->asin = $request->asin;
            $Book->kindle_asin = $request->kindle_asin;
            $Book->marketplace_id = $request->marketplace_id;
            $Book->country_code = $request->country_code;
            $Book->image_url = $request->image_url;
            $Book->small_image_url = $request->small_image_url;
            $Book->publication_year = $request->publication_year;
            $Book->publication_month = $request->publication_month;
            $Book->publication_day = $request->publication_day;
            $Book->publisher = $request->publisher;
            $Book->language_code = $request->language_code;
            $Book->is_ebook = $request->is_ebook;
            $Book->description = $request->description;
            $Book->num_pages = $request->num_pages;
            $Book->format = $request->format;
            $Book->edition_information = $request->edition_information;
            
            $Book->save();
            
            // redirect
            return redirect(url('/') . '/books/' . $Book->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PageSettings = array('Pagelocation' => 'Book Single', 'PageSubtitle' => 'Book Single');

        $Book = \App\Book::find($id);

        $Products = \App\Book::find($id)->products()->orderBy('price', 'asc')->get();

        foreach($Products as $Product){
            $Images[$Product->id] =   File::allFiles("/bitnami/bookmarket/public/productimages/" . $Product->id); 
        }

        $Authors = \App\Book::find($id)->authors()->get();

        return view('pages.book', ['PageSettings' => $PageSettings, 'Book' => $Book, 'Products' => $Products, 'Authors' => $Authors, 'Images' => $Images]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $PageSettings = array('Pagelocation' => 'Books', 'PageSubtitle' => 'Books');

        $Book = \App\Address::find($id);

        return view('pages.bookcardcreatecollection', ['Book' => $Book, 'PageSettings' => $PageSettings]);
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
        //
        $Book = \App\Book::find($id);
        //validate
        $validator = Validator::make($request->all(), $this->ValidationRules());
        // store
        if ($validator->fails()){
            Log::debug('validation Failed\n');
            Log::debug($validator->errors()->first());
            return redirect(url('/') . '/books/create')
            ->withErrors($validator)
            ->withInput();
        }else{

            $Book->title = $request->title;
            $Book->isbn = $request->isbn;
            $Book->isbn13 = $request->isbn13;
            $Book->asin = $request->asin;
            $Book->kindle_asin = $request->kindle_asin;
            $Book->marketplace_id = $request->marketplace_id;
            $Book->country_code = $request->country_code;
            $Book->image_url = $request->image_url;
            $Book->small_image_url = $request->small_image_url;
            $Book->publication_year = $request->publication_year;
            $Book->publication_month = $request->publication_month;
            $Book->publication_day = $request->publication_day;
            $Book->publisher = $request->publisher;
            $Book->language_code = $request->language_code;
            $Book->is_ebook = $request->is_ebook;
            $Book->description = $request->description;
            $Book->num_pages = $request->num_pages;
            $Book->format = $request->format;
            $Book->edition_information = $request->edition_information;
            
            $Book->save();
            
            // redirect
            return redirect(url('/') . '/books/' . $Book->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Your Addresses');

        $Bool = \App\Book::destroy($id);
        
        $Books = \App\Book::take(20)->get();

        return view('pages.bookcardcollection', ['PageSettings' => $PageSettings, 'Books' => $Books]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search()
    {
        //
    
        $PageSettings = array('Pagelocation' => 'Search Result', 'PageSubtitle' => 'Search Result');

        $item = $_GET['search'];

        $BooksTitleISBN = \App\Book::select('id', 'title', 'image_url')->where('isbn','LIKE','%'.$item.'%')->orWhere('isbn13','LIKE','%'.$item.'%')->orWhere('title','LIKE','%'.$item.'%')->get(); 

        $BooksAuthor = \App\BookAuthor::join('books', 'book_authors.book_id', '=', 'books.id')->join('authors', 'book_authors.author_id', '=', 'authors.id')->select('books.id' , 'books.title AS title', 'books.image_url AS image_url')->where('authors.author_name','LIKE','%'.$item.'%')->groupBy('books.id')->get();

        $Books =  $BooksTitleISBN->merge($BooksAuthor);

/*         $good=simplexml_load_string(file_get_contents('https://www.goodreads.com/search/index.xml?key=C3SzR3sjAlLvr8fx0V3EKA&q=' . str_replace(" ","+",$item)),'SimpleXMLElement', LIBXML_NOCDATA | LIBXML_NOBLANKS);

        for ($i = 0; $i < count($good->search->results->work); $i++) {
            if ( $Books->where('title',(string) $good->search->results->work[$i]->best_book->title)->count() == 0 ){
                $BookModel = new Book;
                $BookModel->goodreads_book_id = (int) $good->search->results->work[$i]->best_book->id;
                $BookModel->title = (string) $good->search->results->work[$i]->best_book->title;
                $BookModel->image_url = (string) $good->search->results->work[$i]->best_book->image_url;
                $BookModel->small_image_url = (string) $good->search->results->work[$i]->best_book->small_image_url;
                $BookModel->save();
                $bookid = $BookModel->id;
                //$bookid = \App\Book::insertGetId(['goodreads_book_id' => (int) $good->search->results->work[$i]->best_book->id,'title' => (string) $good->search->results->work[$i]->best_book->title,'image_url' => (string) $good->search->results->work[$i]->best_book->image_url,'small_image_url' => (string) $good->search->results->work[$i]->best_book->small_image_url,'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]);
                $bookone = \App\Book::select('id', 'title', 'image_url')->where('id',$bookid)->get();
                $Books = $Books->merge($bookone);
            }
        } */

        return view('pages.bookcardcollection', ['PageSettings' => $PageSettings, 'Books' => $Books]);

        //return view('pages.search', ['Books' => $Books]);
    
    }

    public function ToObject($Array) { 
      
        // Create new stdClass object 
        $object = new \stdClass(); 
          
        // Use loop to convert array into 
        // stdClass object 
        foreach ($Array as $key => $value) { 
            $object->$key = $value; 
        } 
        return $object; 
    } 

    public function unique_multidim_array($BooksExternal,$BooksInternal, $key) {
        $temp_array = array();
        $i = 0;
        $key_array = array();
        $BookID = 0;
       
        foreach($BooksExternal as $External){
            $BookID = 0;
            if (!preg_match('/"'.preg_quote($BooksExternal[$i][$key], '/').'"/i' , json_encode($BooksInternal))){
                $BookID = \App\Book::insertGetId([
                    'goodreads_book_id' => (int) $External['goodreads_book_id'],
                    'title' => (string) $External['title'],
                    'image_url' => (string) $External['image_url'],
                    'small_image_url' => (string) $External['small_image_url'],
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s')
                    ]);
                $temp_array[$i] = $External;
                $temp_array[$i]['id'] = $BookID;
            }
            $i++;   
        }
        
        return array_merge($temp_array,$BooksInternal);
    }
}
