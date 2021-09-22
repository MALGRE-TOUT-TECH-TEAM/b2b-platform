@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<div class="profile-wrapper">
    <div class="profile-box">
        <form method="POST" action="ccreate">
            @csrf
            <div class="category-info-grid">
                <div>
                    <div>
                        <h5 class="cat-header-text">VÆLG KATEGORI</h5>
                    </div>
                    <div class="cat-inner">
                        <div>
                            <i class="cat-icon fa-solid fa-circle-info"></i>
                        </div>
                        <div class="info-title">
                            <h6>Kategorier</h6>
                        </div>
                        <div></div>
                        <div class="info-title">
                            <p>Vælg den eller de kategorier, som dine produkter henvender sig til.</p>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="progress-box">
                    <img src="../media-assets/progress50.png" height="105" alt="">
                </div>
            </div>
            <div class="categories-grid">

                    @foreach($categories as $data)
                    @csrf
                    <div class="category-button">
                        <input class="hidden" type="checkbox" name="categories[]" id="{{$data->id}}" value="{{$data->id}}">
                        <label class="category-label" for="{{$data->id}}">{{$data->dan_name}}</label>
                    </div>
                    @endforeach
                     <div>
                         
                     </div>
              
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



{{-- <div class="login-container">
    <h5>MAMA MIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAddd</h5>
    <form method="POST" action="ccreate">
        @foreach($categories as $data)
        @csrf

        <label for="category">{{$data->dan_name}}</label>
        <input type="checkbox" name="categories[]" id="category" value="{{$data->id}}">
        @endforeach

        <div class="row">
            <button submit="type" class="login-btn">
                {{ __('Næste') }}
            </button>
        </div>

    </form>
</div> --}}

@endsection



{{-- <div class="profile-grid">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <h5 class="cat-header-text">VÆLG KATEGORI</h5>
            </div>
            <div class="row">
                <div class="col-md-2 info-icon-box">
                    <i class="cat-icon fa-solid fa-circle-info"></i>                    
                </div>
                <div class="col-md-10 info-title">
                    <h6>Kategorier</h6>
                    <p>Vælg den eller de kategorier, som dine produkter henvender sig til.</p>
                </div>
            </div>                   
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-2">
            <div class="progress-box">
                <img src="../media-assets/progress50.png" height="105" alt="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="col-md-6">
                <button class="profile-btn">Næste</button>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div> --}}