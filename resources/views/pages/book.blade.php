@extends('layouts.default')
@section('content')

@include('shared.breadcrumb')

<div class="container" id="product-section">
  <div class="row">
   <div class="col-md-4">
    <img src="{{$Book->image_url}}" class="img-fluid" width="100%" style="padding-top: 5px">
   </div>
   <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$Book->title}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <span class="monospaced">ISBN No. {{$Book->isbn}}</span>
            </div>
        </div>
        <hr>
        <div class="row bottom-rule justify-content-center">
            @if (isset($Products))
                <div class="col-md-6">
                    <span class="monospaced">In Stock</span>
                </div>
                <div class="col-md-6">
                    <span class="monospaced">EGP {{$Products->first()->price}}</span>
                </div>
            @else

                    <span class="monospaced">Not In Stock</span>

            @endif
        </div><!-- end row -->
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <button type="button" class="btn btn-lg btn-outline-secondary"><a href="{{URL::to('/')}}/productcreate/{{$Book->id}}"><i class="fa fa-money" title="Sell" ></i></a></button>
            </div>
            <div class="col-md-4 col-md-offset-1 text-center">
                  @if (Auth::check())
                    @if (Auth::user()->wishes()->where('book_id',$Book->id)->first() != null)
                      <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' style="color:blue" class="btn btn-lg btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                    @else
                      <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' class="btn btn-lg btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                    @endif
                  @else
                    <button type="button" id="wish{{$Book->id}}" onClick='toggleByBookID({{$Book->id}});' class="btn btn-lg btn-outline-secondary"><i class="fa fa-heart" title="Wish"></i></button>
                  @endif
            </div>
        </div><!-- end row -->
        <hr>
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Details</a>
                        <a class="nav-item nav-link" id="nav-author-tab" data-toggle="tab" href="#nav-author" role="tab" aria-controls="nav-author" aria-selected="false">Authors</a>
                        <a class="nav-item nav-link" id="nav-product-tab" data-toggle="tab" href="#nav-product" role="tab" aria-controls="nav-prodcut" aria-selected="false">Products</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>{!! $Book->description !!}</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul class="list-group">
                            <li class="list-group-item">isbn: {{$Book->isbn}}</li>
                            <li class="list-group-item">isbn13: {{$Book->isbn13}}</li>
                            <li class="list-group-item">asin: {{$Book->asin}}</li>
                            <li class="list-group-item">kindle_asin: {{$Book->kindle_asin}}</li>
                            <li class="list-group-item">marketplace_id: {{$Book->marketplace_id}}</li>
                            <li class="list-group-item">country_code: {{$Book->country_code}}</li>
                            <li class="list-group-item">publication_year: {{$Book->publication_year}}</li>
                            <li class="list-group-item">publication_month: {{$Book->publication_month}}</li>
                            <li class="list-group-item">publication_day: {{$Book->publication_day}}</li>
                            <li class="list-group-item">publisher: {{$Book->publisher}}</li>
                            <li class="list-group-item">language_code: {{$Book->language_code}}</li>
                            <li class="list-group-item">is_ebook: {{$Book->is_ebook}}</li>
                            <li class="list-group-item">num_pages: {{$Book->num_pages}}</li>
                            <li class="list-group-item">format: {{$Book->format}}</li>
                            <li class="list-group-item">edition_information: {{$Book->edition_information}}</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-author" role="tabpanel" aria-labelledby="nav-author-tab">
                        @if (isset($Authors))
                            @include('shared.authorcard')
                        @endif
                    </div>
                    @isset($Products)
                    <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab">
                        @include('shared.productcard')
                    </div>
                    @endisset
                </div>
            </div>
        </div>
   </div>
  </div><!-- end row -->
 </div><!-- end container -->

@stop