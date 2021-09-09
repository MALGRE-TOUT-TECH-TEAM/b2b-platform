@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
<div class="profile-wrapper">
    <div class="profile-box">
        <form method="POST" action="/" enctype="multipart/form-data">
            <div class="profile-grid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <h5 class="profile-header-text">PROFIL</h5>
                        </div>
                        <div class="row profile-image-box">
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                            <img id="preview">
                            <input id="file" type="file" onchange="previewImage();" name="profileimage" accept="image/x-png,image/jpeg,image/webp">
                        </div>
                        <div class="row file-upload-box">
                           <label for="file" class="upload-btn">Upload</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                    
                    </div>
                    <div class="col-md-2">
                        <div class="progress-box">
                            <img src="../media-assets/progress25.png" height="105" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="fornavn">{{ __('FORNAVN') }}</label>
                            <input id="fornavn" type="text" class="@error('fornavn') is-invalid @enderror" name="fornavn" value="{{ old('fornavn') }}" required autocomplete="fornavn" autofocus>
                            @error('fornavn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="efternavn">{{ __('EFTERNAVN') }}</label>
                            <input id="efternavn" type="text" class="@error('efternavn') is-invalid @enderror" name="efternavn" value="{{ old('efternavn') }}" required autocomplete="efternavn" autofocus>
                            @error('efternavn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="email">{{ __('E-MAIL') }}</label>
                            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row">
                            <label for="telefon">{{ __('TELEFON') }}</label>
                            <input id="telefon" type="tel" class="@error('telefon') is-invalid @enderror" name="telefon" value="{{ old('telefon') }}" required autocomplete="telefon" autofocus>
                            @error('telefon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="birthdate">{{ __('FØDSELSDAG') }}</label>
                            <input id="birthdate" type="date" class="@error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>
                            @error('birthdate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="gender">{{ __('KØN') }}</label>
                            {{-- <input id="gender" type="text" class="@error('fornavn') is-invalid @enderror" name="fornavn" value="{{ old('fornavn') }}" required autocomplete="fornavn" autofocus> --}}
                            <select name="gender" id="gender" class="@error('fornavn') is-invalid @enderror">
                                <option value="">Mand</option>
                                <option value="">Kvinde</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="cvr">{{ __('CVR') }}</label>
                            <input id="cvr" type="number" class="@error('cvr') is-invalid @enderror" name="cvr" value="{{ old('cvr') }}" required autocomplete="cvr" autofocus>
                            @error('cvr')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="profile-btn">Næste</button>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
    function previewImage(){
        var file = document.getElementById('file').files
        if(file.length > 0){
            var fileReader = new FileReader();
            fileReader.onload = function(event){
                // document.getElementById('preview').setAttribute("src", event.target.result);
                document.getElementById('preview').style.backgroundImage = "url('" + event.target.result + "')";
                console.log(event.target.result)
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
</script>
