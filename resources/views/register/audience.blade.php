@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<div class="profile-wrapper">
    <div class="profile-box">
        <form method="POST" action="acreate">
            @csrf
            <div class="category-info-grid">
                <div>
                    <div>
                        <h5 class="cat-header-text">VÆLG MÅLGRUPPE</h5>
                    </div>
                    <div class="cat-inner">
                        <div>
                            <i class="cat-icon fa-solid fa-circle-info"></i>
                        </div>
                        <div class="info-title">
                            <h6>Målgruppe</h6>
                        </div>
                        <div></div>
                        <div class="info-title">
                            <p>Vælg den eller de målgrupper, som dine produkter henvender sig til.</p>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="progress-box">
                    <img src="../media-assets/progress75.png" height="105" alt="">
                </div>
            </div>
            <div class="categories-grid">

                    @foreach($audiences as $data)
                    <div class="category-button">
                        <input class="hidden" type="checkbox" name="audiences[]" id="{{$data->id}}" value="{{$data->id}}">
                        <label class="category-label" for="{{$data->id}}">{{$data->dan_name}}</label>
                    </div>
                    @endforeach            
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button submit="type" class="profile-btn">
                        {{ __('Næste') }}
                    </button>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </form>
    </div>
</div>







<div>
    <h5>PAPA MIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h5>
    <form method="POST" action="acreate">
        @foreach($audiences as $data)
        @csrf

        <label for="audience">{{$data->dan_name}}</label>
        <input type="checkbox" name="audiences[]" id="audience" value="{{$data->id}}">
        @endforeach

        <div class="row">
            <button submit="type" class="login-btn">
                {{ __('Næsten') }}
            </button>
        </div>

    </form>
</div>