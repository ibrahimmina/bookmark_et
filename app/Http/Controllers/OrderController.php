<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Address;
use App\Book;
use App\Author;
use App\BookAuthor;
use Illuminate\Support\Facades\URL;
use Log;

use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            $PageSettings = array('Pagelocation' => 'Wish Books', 'PageSubtitle' => 'Wished For Books', 'BookVariable' => 'Wishes');
  
            $Books = Auth::user()->BuyingBooks()->get();
            return view('pages.bookcardcollection', ['Books' => $Books, 'PageSettings' => $PageSettings]);

        } catch (Exception $e) {
            report($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getbyuserid()
    {
        try {
            $PageSettings = array('Pagelocation' => 'Order Books', 'PageSubtitle' => 'Ordered Books');
            $Wishes = new \Illuminate\Database\Eloquent\Collection;
            foreach (Auth::user()->orders()->get() as $UserOrders) { 
                $BookModel = new Book;
                $BookModel->id = $UserOrders->book()->first()->id;
                $BookModel->image_url = $UserOrders->book()->first()->image_url;
                $BookModel->title = $UserOrders->book()->first()->title;
                $Wishes->add($BookModel);
            }
            
    
            return view('pages.bookcardcollection', ['PageSettings' => $PageSettings, 'Books' => $Wishes]);

        } catch (Exception $e) {
            report($e);
        }   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getOrder()
    {
        try {
            $request = new HttpRequest();
            $request->setUrl("https://accept.paymobsolutions.com/api/auth/tokens");
            $request->setMethod(HTTP_METH_POST);
            
            $request->setHeaders(array(
              "content-type" => "application/json"
            ));
            
            $request->setBody('{
              "username": "msibrahim",
              "password": "Godbewithme1!"
            }');
            
            try {
              $response = $request->send();
            
              echo $response->getBody();
            } catch (HttpException $ex) {
              echo $ex;
            }

        } catch (Exception $e) {
            report($e);
        }   

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        $Product = \App\Product::join('books', 'products.book_id', '=', 'books.id')
        ->select('books.title', 'books.description', 'products.price', 'products.quantity' , 'products.product_image_url' , 'products.book_type' , 'products.book_status' , 'products.missing_pages', 'products.user_id', 'products.id')
        ->where('products.id',$id)
        ->first();

        return view('pages.productorder', ['Product' => $Product]);
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

        $ProductId = (int) $request->id;

        $buyer_address = \App\Address::insertGetId([
            'user_id' => $user_id,
            'address' => (string) request('address'),
            'district' => (string) request('district'),
            'city' => "Cairo",
            'postalcode' => (string) request('postalcode'),
            'phone' => (string) request('phone'),
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
            ]);

        $SellerAddress = \App\Address::select('id')
        ->where('user_id',request('seller_user_id'))
        ->first();

        $bool = \App\Order::insert([
            'product_id' => (int) $request->id,
            'quantity' => (int) $request->quantity,
            'seller_user_id' => (int) $request->seller_user_id,
            'buyer_user_id' => (int) $user_id,
            'total_amount' => (int) $request->price,
            'seller_address_id' => (int) $SellerAddress->id,
            'buyer_address_id' => $buyer_address,
            'payment_method' => "cash",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
            ]);

        if (isset($bool)){
            $Quantity = \App\Product::select('quantity')->where('id', $ProductId)->first();
            if ($Quantity->quantity > $request->quantity){
                $booldec = \App\Product::where('id', $ProductId)->decrement('quantity', $request->quantity);
            }
            

            return redirect(URL::to('/'));
        }else{
            return redirect()->back();
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
        //
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
    }
}
