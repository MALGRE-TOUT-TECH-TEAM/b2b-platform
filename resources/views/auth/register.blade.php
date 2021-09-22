@extends('layouts.login')
@section('assets')
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection
@section('content')

    <div class="profile-wrapper">
        <div class="profile-box">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
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
                                <input id="photo" type="file" onchange="previewImage();" name="photo"
                                    accept="image/x-png,image/jpeg,image/webp">

                            </div>
                            <div class="row file-upload-box">
                                <label for="photo" class="upload-btn">Upload</label>
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
                                <label for="firstname">{{ __('FORNAVN') }}</label>
                                <input id="firstname" type="text" class="@error('firstname') is-invalid @enderror"
                                    name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname"
                                    autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="surname">{{ __('EFTERNAVN') }}</label>
                                <input id="surname" type="text" class="@error('surname') is-invalid @enderror"
                                    name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                @error('surname')
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
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                    value="{{ session('email') }}" readonly required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="row">
                                <label for="telephone">{{ __('TELEFON') }}</label>
                                <input id="telephone" type="tel" class="@error('telephone') is-invalid @enderror"
                                    name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone"
                                    autofocus>
                                @error('telephone')
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
                                <input id="birthdate" type="date" class="@error('birthdate') is-invalid @enderror"
                                    name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate"
                                    autofocus>
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
                                <select name="gender" id="gender" class="@error('gender') is-invalid @enderror">
                                    <option value="Male">Mand</option>
                                    <option value="Female">Kvinde</option>
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
                                <input id="cvr" type="number" class="@error('cvr') is-invalid @enderror" name="cvr"
                                    value="{{ old('cvr') }}" required autocomplete="cvr" autofocus>
                                @error('cvr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row kode-input-box">
                                <label for="password">{{ __('KODE') }}</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
    function previewImage() {
        var file = document.getElementById('photo').files
        if (file.length > 0) {
            var fileReader = new FileReader();
            fileReader.onload = function(event) {
                // document.getElementById('preview').setAttribute("src", event.target.result);
                document.getElementById('preview').style.backgroundImage = "url('" + event.target.result + "')";
                let file = document.querySelector('input[type=file]').files[0];
                document.getElementById('photo').value = file.name
            }
            fileReader.readAsDataURL(file[0]);
        }
    }
</script>
