@extends("layouts.main-layout")

@section('content')
<h1>This is the Testing Page</h1>
<h2>Array Testing</h2>
@isset($myArray)
<ul>
    <li>{{ $myArray["First"] }}</li>
    <li>{{ $myArray["Second"] }}</li>
    <li>{{ $myArray["Third"] }}</li>
    {{-- @php
        foreach($myArray as $keyPair){
           echo('<li>' $keyPair '</li>'); 
        }
    @endphp --}}
</ul>
@endisset

@isset($simpleArray)
    Simple Array
    {{-- @foreach($item as $key => $value)
        
    @endforeach --}}
@endisset

@if(isset($analyticsData))
<h2>Google Analytics Data</h2>
<table class="table table stripped">
    <tr>
        <th>Date</th>
        <th>Page Title</th>
        <th>Visitors</th>
        <th>Page Views</th>
    </tr>
    {{-- @foreach($item in $analyticsData)
    <tr>
        <td>{{ $item['date']}}</td>
    <td>{{ $item['pageTitle'] }}</td>
    <td>{{ $item['visitors'] }}</td>
    <td>{{ $item['pageViews'] }}</td>
    </tr>
    @endforeach --}}
</table>

@endif
@endsection