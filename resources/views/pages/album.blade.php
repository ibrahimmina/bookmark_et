@extends('layouts.default')
@section('content')
  <div class="jumbotron" >
      <h1 class="display-4"><font color="white">Welcome to Book Market</font></h1>
      <p class="lead"><font color="white">Your One Stop Shop to Buy & Sell New & Used Book.</font></p>
      <hr style="border: 1px solid white">
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{URL::to('/')}}/books" role="button">Browse Books</a>
      </p>
  </div>

@include('shared.title', ['title' => 'Shop Products'])
@include('shared.bookcard', ['Books' => $ShopProducts])
@include('shared.title', ['title' => 'Wish Products'])
@include('shared.bookcard', ['Books' => $WishProducts])

@stop