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