@extends('layouts.default')
@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="mb-3" align="center">Product View:</h4>

        <div class="row" width="100%">
            <div class="col">
                <h5>Pick-up Address:</h5>
            </div>
        </div>

        <div class="row ml-3" id="review_address" width="100%">
            <address id="address_{{$Address->id}}">
                <strong>{{$Address->fullname}}</strong><br>
                {{$Address->address1}}<br>
                {{$Address->address2}}<br>
                {{$Address->district}}, {{$Address->city}} {{$Address->postalcode}}<br>
                <abbr title="Phone">P:</abbr> {{$Address->phone}}
            </address>
            <input type="text" id="seller_address_id" name="seller_address_id" value="{{$Address->id}}" style="display: none;">
        </div>

        <hr>                    

        <div class="row" width="100%">
            <div class="col">
                <h5>Book Details:</h5>
            </div>
        </div>

        <div class="row ml-3 mr-3" width="100%">
            <table class="table" id="review_details">
                <tbody>
                    <tr>
                        <th scope="row">Price</th>
                        <td id="review_price">{{$Product->price}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Quantity</th>
                        <td id="review_quantity">{{$Product->quantity}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Book Type</th>
                        <td id="review_book_type">{{$Product->book_type}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Book Status</th>
                        <td id="review_book_status">{{$Product->book_status}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Missing Pages</th>
                        @if($Product->missing_pages == 0)
                            <td id="review_missing_pages">No</td>
                        @else
                            <td id="review_missing_pages">Yes</td>
                        @endif
                    </tr>  
                </tbody>
            </table>
        </div>

        <hr>     

        <div class="row" width="100%">
            <div class="col">
                <h5>Book Pictures:</h5>
            </div>
        </div>

        <div class="row ml-3" width="100%">
            @foreach ($Images as $Image)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{URL::to('/')}}/productimages/{{$Product->id}}/{{$Image->getFilename()}}" style="width: 100%; height: 225px; background: rgb(85, 89, 92); color: rgb(236, 238, 239);">
                    </div>
                </div>
            @endforeach
        </div> 

        <hr>  

        <div class="d-flex justify-content-center">
            <a class="btn btn-primary mr-3" href="{{URL::to('/')}}/products/{{$Product->id}}/edit" role="button">Update</a>
            <form method="POST" action="{{URL::to('/')}}/products/{{$Product->id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-secondary btn-lg ">Delete</button>
            </form>
        </div>

    </div>
</div>


@stop