@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="login-container">
    <div class="login-box ">
        <form method="GET" action="logmein">
            @csrf
            <div class="login-register">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 login-col "><a style="font-weight: 700" href="login">{{ __('LOG IND') }}</a></div>
                        <div class="col-md-9 opret-col"><a href="/opretprofile">{{ __('OPRET KONTO') }}</a></div>
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
                            <div class="col-md-6 column-text">
                                <div class="col-md-1 round column-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox"></label>
                                </div>
                                <label for="checkbox">{{ __('Husk mig') }}</label>
                            </div>
                            <div class="col-md-5 column-text">
                                @if (Route::has('password.request'))
                                <label for="">
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Glemt kodeord?') }}
                                    </a>
                                </label>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <button submit="type" class="login-btn">
                                {{ __('Log Ind') }}                   
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
