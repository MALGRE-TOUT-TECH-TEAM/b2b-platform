@extends('layouts.login')
@section('assets')
    <!-- Scoped link tags can go here -->
@endsection
@section('content')
    <div class="profile-wrapper">
        <div class="profile-box">
            <form method="POST" action="audiences">
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
                    @foreach ($audiences as $data)
                        <div class="category-button">
                            <input class="hidden" type="checkbox" name="audiences[]" id="{{ $data->id }}"
                                value="{{ $data->id }}">
                            <label class="category-label" for="{{ $data->id }}">{{ $data->dan_name }}</label>
                        </div>
                    @endforeach
                </div>
                @if ($errors->any())
                    <div class="my-3">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
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
@endsection