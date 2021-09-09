@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf                      

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="login-container">
    <div class="login-box ">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="login-register">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 login-col "><a  href="{{ route('login') }}">{{ __('LOG IND') }}</a></div>
                        <div class="col-md-9 opret-col"><a style="font-weight: 700" href="{{ route('register') }}">{{ __('OPRET KONTO') }}</a></div>
                    </div>
                    <div class="row login-form">
                        <div class="row email-input-box">
                            <label for="email">{{ __('E-MAIL') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row kode-input-box">
                            <label for="password">{{ __('KODE') }}</label>
                            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
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
                                    <input class="@error('remember') is-invalid @enderror" 
                                        type="checkbox" 
                                        name="remember"
                                        id="remember"     
                                        >
                                    <label class="accept-check" for="checkbox"></label>
                                    @error('remember')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
     
                                </div>
                                
                                <label style="font-size:15px" for="remember">{{ __('Jeg har læst og accepterer handelsbetingelserne') }}</label>
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

