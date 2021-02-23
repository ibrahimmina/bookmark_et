@extends('layouts.default')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Login</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>My Account / Login</h1>
        <div class="form">
            <form action="/authuser" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-5">
                        <input id="email" type="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required autocomplete="email">
                        <span class="required-star">*</span> 
                    </div>

                    <div class="col-md-5">
                        <input id="password" placeholder="Password" type="password" name="password" placeholder="Enter Password" required autocomplete="current-password">
                        <span class="required-star">*</span>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <button class="btn black">Login</button>
                        <h5>not Registered? <a href="registeruser">REgister here</a></h5>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@stop
