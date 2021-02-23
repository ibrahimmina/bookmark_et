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
        <h1>{{ __('Login') }}</h1>
        <div class="form">

            <form class="form-signin" method="POST" action="{{ route('login') }}" style="margin-top: 50px;margin-bottom: 100px;">
            @csrf
                <label for="inputEmail" class="sr-only">Email address</label>
                <input id="inputEmail" placeholder="Email address" type="email" autocomplete="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="inputPassword" class="sr-only">Password</label>
                <input id="inputPassword" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password" style="width: 100%;height: 50px;padding-left: 20px;margin-bottom: 35px">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="checkbox mb-3" style="font-weight: 400;margin-bottom: 1rem!important">
                    <label><input type="checkbox" value="remember-me" style="box-sizing: border-box;padding: 0;margin: 0;border: initial"> {{ __('Remember Me') }}</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" style="padding: 12px 60px 10px;float: left;font-weight: 300">{{ __('Login') }}</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}" style="padding: 12px 60px 10px;float: left;font-weight: 300">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <h5 style="float: left;line-height: 50px;padding-left: 15px;font-weight: 300;text-transform: uppercase;font-size: 16px">not Registered? <a href="register" style="font-weight: 600;color: #fc4733;border-bottom: 1px solid">Register here</a></h5>
            </form>
        </div>
    </div>
</section>
@endsection
