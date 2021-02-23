<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
use Illuminate\Support\Facades\Validator;

use Auth;
use Log;

class AddressController extends Controller
{
    public function ValidationRules()
    {
        return [
            'user_id' => 'required|integer',
            'fullname' => 'required|string|max:255',
            'address1' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postalcode' => 'required|string|max:255',
            'phone' => 'required|string|max:255',            
        ];    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addressSelect(Request $request)
    {
        //
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => $request->book_id);

        return view('pages.addresscardcollection', ['PageSettings' => $PageSettings]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Your Addresses');

        return view('pages.addresscardcollection', ['PageSettings' => $PageSettings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Add New Addresse');

        return view('pages.addresscardcreatecollection', ['PageSettings' => $PageSettings]);
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
            $request->merge(['user_id' => $user_id]);
            //validate
            $validator = Validator::make($request->all(), $this->ValidationRules());
            // store
            if ($validator->fails()){
                Log::debug('validation Failed\n');
                Log::debug($validator->errors()->first());
                return redirect(url('/') . '/addresses/create')
                ->withErrors($validator)
                ->withInput();
            }else{
                $Address = new Address;
                $Address->user_id = $request->user_id;
                $Address->fullname = $request->fullname;
                $Address->address1 = $request->address1;
                $Address->address2 = $request->address2;
                $Address->district = $request->district;
                $Address->city = $request->city;
                $Address->country = $request->country;
                $Address->postalcode = $request->postalcode;
                $Address->phone = $request->phone;    
                $Address->save();
                
                // redirect
                return redirect(url('/') . '/addresses');
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
        $PageSettings = array('Pagelocation' => 'Addresses', 'PageSubtitle' => 'Your Addresses');

        $Address = \App\Address::find($id);

    

        return view('pages.addresscardcreatecollection', ['Address' => $Address, 'PageSettings' => $PageSettings]);
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
        $Address = \App\Address::find($id);

        $user_id = Auth::user()->id;
        $request->merge(['user_id' => $user_id]);
        //validate
        $validator = Validator::make($request->all(), $this->ValidationRules());
        // store
        if ($validator->fails()){
            Log::debug('validation Failed\n');
            Log::debug($validator->errors()->first());
            return redirect(url('/') . '/addresses/create')
            ->withErrors($validator)
            ->withInput();
        }else{

            $Address->fullname = $request->fullname;
            $Address->address1 = $request->address1;
            $Address->address2 = $request->address2;
            $Address->district = $request->district;
            $Address->city = $request->city;
            $Address->country = $request->country;
            $Address->postalcode = $request->postalcode;
            $Address->phone = $request->phone; 
            $Address->save();

            // redirect
            return redirect(url('/') . '/addresses');
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

        $Bool = \App\Address::destroy($id);

        return view('pages.addresscardcollection', ['PageSettings' => $PageSettings]);
    }
}
