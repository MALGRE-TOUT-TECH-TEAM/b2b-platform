@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="login-container">
        <div class="login-box ">
            <form method="POST" action="{{ route('registerprofile') }}">
                @csrf
                <div class="login-register">
                    <div class="col-md-12">
                        @include("auth.partials.row")
                        <div class="row login-form">
                            <div class="row email-input-box">
                                <label for="email">{{ __('E-MAIL') }}</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row accept-box">
                                <div class="col-md-1 round column-checkbox">
                                </div>
                                <div class="col-md-11 column-text">
                                    <div class="col-md-1 round column-checkbox">
                                        <input class="@error('remember') is-invalid @enderror" type="checkbox"
                                            name="remember" id="remember">
                                        <label class="accept-check" for="checkbox"></label>
                                        @error('remember')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <label style="font-size:15px" for="remember">{{ __('Jeg har l??st og accepterer handelsbetingelserne') }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <button submit="type" class="login-btn">
                                    {{ __('Kom i gang') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
