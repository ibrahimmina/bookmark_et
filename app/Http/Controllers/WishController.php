<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Auth;
use Log;

class WishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
  
            $Books = Auth::user()->WishedBooks()->get();
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toggleByBookID(Request $request)
    {
        try {
            $user_id = Auth::user()->id;

            $toggle = \App\Wish::where ([
                ['book_id',$request->book_id],
                ['user_id' , $user_id],
            ])->exists();

            if ($toggle == true){
                $Bool = \App\Wish::where ([
                    ['book_id',$request->book_id],
                    ['user_id' , $user_id],
                ])->delete();
            }else{
                $Bool = \App\Wish::insert([
                    'book_id' => (int) $request->book_id,
                    'user_id' => (int) $user_id,
                    'created_at' => date('Y-m-d H:i:s'), 
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }

        } catch (Exception $e) {
            report($e);
        }   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getByBookID(Request $request)
    {
        try {
            $user_id = Auth::user()->id;

            return \App\Wish::where ([
                ['book_id',$request->book_id],
                ['user_id' , $user_id],
            ])->exists();

        } catch (Exception $e) {
            report($e);
        }   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        //

        $user_id = Auth::user()->id;

        $Product = \App\Product::get()->where('book_id',$id)->first();

        $Bool = \App\Wish::insert([
            'book_id' => (int) $id,
            'user_id' => (int) $user_id,
            'created_at' => date('Y-m-d H:i:s'), 
            'updated_at' => date('Y-m-d H:i:s')
            ]);

        if (isset($Product)){
            return redirect('book/' . $id);
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
    public function getbyuserid()
    {
        try {
            $PageSettings = array('Pagelocation' => 'Wish Books', 'PageSubtitle' => 'Wished For Books');

            $Wishes = \App\Wish::where('user_id', Auth::user()->id)
            ->join('books', 'wishes.book_id', '=', 'books.id')
            ->select('books.title', 'books.image_url' , 'books.id as id')
            ->get();;
    
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
    public function show()
    {
        //
        return \App\Wish::where('user_id', Auth::user()->id);

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
