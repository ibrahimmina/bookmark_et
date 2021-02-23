@extends('layouts.default')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="index.html">Home</a>
        <span class="breadcrumb-item active">Verification</span>
    </div>
</div>

<section class="static about-sec">
    <div class="container">
        <h1>{{ __('Verify Your Email Address') }}</h1>
        <div class="card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},        
            
            <form class="form-signin" method="POST" action="{{ route('verification.resend') }}">
            @csrf
                <button type="submit" class="btn btn-lg btn-primary btn-block" style="padding: 12px 60px 10px;float: left;font-weight: 300">{{ __('click here to request another') }}</button>.
            </form>        
        </div>
    </div>
</section>
@endsection
