@extends('layouts.default')
@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Register</span>
    </div>
</div>
<section class="static about-sec">
    <div class="container">
        <h1>{{ __('Register') }}</h1>
        <div class="form">

            <form class="form-signin" method="POST" action="{{ route('register') }}" style="margin-top: 50px;margin-bottom: 100px;">
            @csrf
                <label for="name" class="sr-only">{{ __('Name') }}</label>
                <input id="name" placeholder="Name" type="text" autocomplete="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
                      
                <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input id="inputEmail" placeholder="Email address" type="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
                <input id="inputPassword" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password" style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <label for="password-confirm" class="sr-only">{{ __('Password') }}</label>
                <input id="password-confirm" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  required autocomplete="new-password" style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">

                <button class="btn btn-lg btn-primary btn-block" type="submit" style="padding: 12px 60px 10px;float: left;font-weight: 300">{{ __('Register') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
