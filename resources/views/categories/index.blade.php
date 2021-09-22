<div>
    <h5>MAMA MIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h5>
    <form method="POST" action="/categories">
        @foreach ($categories as $data)
            @csrf

            <label for="category">{{ $data->dan_name }}</label>
            <input type="checkbox" name="categories[]" id="category" value="{{ $data->id }}">
        @endforeach

        <div class="row">
            <button submit="type" class="login-btn">
                {{ __('Næsten') }}
            </button>
        </div>

    </form>
</div>
