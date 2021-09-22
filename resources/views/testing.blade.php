@extends("layouts.main-layout")

@section('content')
<h1>This is the Testing Page</h1>
@if(isset($analyticsData))
    <h2>Google Analytics Data</h2>
    {{-- @foreach($variable as $key => $date)
        
    @endforeach --}}

    {{-- return [
        'date' => Carbon::createFromFormat('Ymd', $dateRow[0]),
        'pageTitle' => $dateRow[1],
        'visitors' => (int) $dateRow[2],
        'pageViews' => (int) $dateRow[3],
    ]; --}}
@endif

@endsection