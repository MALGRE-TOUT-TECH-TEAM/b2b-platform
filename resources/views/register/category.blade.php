<div>
    <h5>MAMA MIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h5>
    @foreach($categories as $data)
    <form method="POST" action="ccreate">
    @csrf
    <tr>
    <td id="category"  width="4%">{{ Form::checkbox($data ->id, $data->id, false, ['class' => 'icheck']) }} {{$data['dan_name']}}</td>
    </tr>
    @endforeach

    <div class="row">
        <button submit="type" class="login-btn">
            {{ __('Næsten') }}                   
        </button>
    </div>

    </form>
</div>
